# Database View Web Application (Kasus 04)

This project is a simple PHP web application created for the Database Practicum Case 04 (Pengendalian Biaya). It demonstrates how to use SQL VIEWs in MySQL and display their results dynamically on a website using PHP with PDO and Bootstrap 5.

## Features

• Connects to MySQL database using PDO (PHP Data Objects)  
• Displays multiple SQL VIEWs (a–h) in a responsive Bootstrap table  
• Clean and simple user interface  
• Automatically fetches and displays data from MySQL views  
• Organized folder structure for easy maintenance  

## Notes

This project was developed for educational purposes in the Database Practicum Case 04.
You can enhance the project by adding more features such as:
• Search or filter function
• Export to Excel or CSV
• Authentication or login system
• REST API integration

## Technologies Used

| Category | Technology |
|-----------|-------------|
| Frontend  | HTML, CSS, Bootstrap 5 |
| Backend   | PHP 8.x (PDO) |
| Database  | MySQL / MariaDB |
| Server    | XAMPP (Apache + MySQL) |

## Project Structure

Website/
│
├── index.php # Homepage - list of all views (a–h)
├── view.php # Displays the selected SQL view
├── koneksi.php # PDO database connection file
└── README.md # Project documentation


## Setup Instructions

1. Install XAMPP (Apache and MySQL)  
   Make sure both services are running.

2. Copy the project folder to your htdocs directory  
   Example:  
   D:\XAMPP\htdocs\Website

3. Import the database  
   Open phpMyAdmin → Import → Select `kasus04.sql` (your database file).

4. Run the project in your browser  
   http://localhost/Website/

5. Click on any link (a–h) to view the corresponding SQL VIEW results.

## Example SQL View

```sql
CREATE OR REPLACE VIEW view_laporan_a AS
SELECT Kelompok, SUM(Jumlah) AS TotalBiaya
FROM RincianBiaya
GROUP BY Kelompok;




Would you like me to generate this as a **ready-to-download `README.md` file** so you can directly upload it to your GitHub repository folder (`Website/`)?
