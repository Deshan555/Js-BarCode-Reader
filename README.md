# HTML5 QR Scan App

Built using HTML5, PHP, html5-qrcode, and MySQL, this straightforward bar code scanning application can check data in the MySQL database and functions as an attendance system.

That system Built Based On : https://github.com/mebjas/html5-qrcode.git

## Features
- Scan Bar codes using the device's camera
- Display Bar code data on the screen
- Store scanned Bar code data in a MySQL database

## Requirements
- A web server with PHP and MySQL installed
- A device with a camera for scanning Bar codes

## Installation
- Download the source code and upload it to your web server.
- Create a new database and import the provided database.sql file to create the necessary tables.
- Open config.php and update the database credentials to match your setup.
- Access the app by opening index.php in your browser.

## Usage
- Allow the app to access your device's camera.
- Point your camera at a Bar code to scan it.
- The Bar code data will be displayed on the screen and stored in the MySQL database.

## Note
- Make sure that your server has the necessary permissions to access the camera
- Also Make sure the SSL(HTTPS) is enabled
- Tested on latest version of Chrome, Firefox, and Safari.
- QR code data is stored in the qr_data table in the database, with the following columns: id, data, and date_scanned.

## Support
If you have any issues or questions, please feel free to contact us via email or issue tracker on Github
