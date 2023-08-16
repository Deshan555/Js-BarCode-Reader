# HTML5 QR Scan App(PHP) 📷 

Welcome to the HTML5 QR Scan App! This innovative application, built using HTML5, PHP, and the power of [html5-qrcode](https://github.com/mebjas/html5-qrcode.git), brings barcode scanning to life. With an added touch of MySQL magic, it becomes an attendance system like no other.

## Features 🚀
- 📸 Scan barcodes effortlessly using your device's camera.
- 📊 Instantly see barcode data displayed on your screen.
- 💾 Seamlessly store scanned barcode data into a MySQL database.

## Requirements 🛠️
- A web server equipped with PHP and MySQL superpowers.
- A camera-equipped device ready to take on barcode-scanning duties.

## Installation 🌟
1. 📥 Download the source code and gracefully upload it to your chosen web server.
2. 🏗️ Construct a new database and bring it to life by importing the `database.sql` file provided. Watch as the necessary tables flourish.
3. 🔌 Open up the `config.php` file and graciously update the database credentials, matching them to your server setup.
4. 🌐 Initiate your journey by simply accessing `index.php` via your preferred web browser.

## Usage 🎬
1. 📸 Grant the app access to your camera, and let the magic begin.
2. 🎯 Aim your device's camera at a barcode to scan it.
3. 📊 Watch in awe as the barcode data gracefully unfurls on your screen and elegantly waltzes its way into the MySQL database.

## Important Notes 📝
- 🛠️ Ensure that your server is granted the necessary permissions to access your device's camera.
- 🔒 Additionally, ensure the graceful embrace of SSL (HTTPS).
- 🛠️ Tested diligently on the latest versions of Chrome, Firefox, and Safari.
- 📊 QR code data is securely stored within the `qr_data` table, with columns such as `id`, `data`, and `date_scanned`.

## Support 🙌
If questions arise or issues emerge, worry not! Reach out to us via email or the Github issue tracker. We're here to ensure your experience is nothing short of amazing. 💌

Embrace the future of barcode scanning and elevate your attendance system with the HTML5 QR Scan App! 🚀📷🌟
