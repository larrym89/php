const cheerio = require('cheerio');
const request = require('request');
const mysql = require('mysql');

// Connect to the MySQL database
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'username',
  password: 'password',
  database: 'database_name'
});

connection.connect();

// Make a request to the hotnews.ro homepage
request('http://www.hotnews.ro/', (error, response, html) => {
  if (!error && response.statusCode == 200) {
    const $ = cheerio.load(html);
    
    // Iterate over the news articles and extract the data
    $('article').each((i, element) => {
      const title = $(element).find('h2 a').text().trim();
      const link = $(element).find('h2 a').attr('href');
      const description = $(element).find('p').text().trim();
      const pubDate = new Date($(element).find('.meta time').attr('datetime'));
      
      // Insert the data into the MySQL database
      const query = `INSERT INTO hotnews (title, link, description, pubDate) VALUES (?, ?, ?, ?)`;
      const values = [title, link, description, pubDate];
      
      connection.query(query, values, (error, results, fields) => {
        if (error) throw error;
        console.log(`Inserted article ${results.insertId}`);
      });
    });
    
    connection.end();
  }
});
