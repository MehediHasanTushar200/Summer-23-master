<!DOCTYPE html>
<html>

<head>
    <title>Contact Us - Real Estate Ltd</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .contact-page {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-head {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .contact-form textarea {
            height: 100px;
        }

        .contact-form .btn {
            display: inline-block;
            background-color: #1c3b28;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .contact-info {
            margin-top: 40px;
            text-align: center;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="contact-page">
        <div class="contact-info">
            <p><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg" alt="Phone Icon">+880 1947481037</p>
            <p><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg" alt="Email Icon">tushar@realestateltd.com</p>
            <p><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg" alt="Address Icon">241 Karim tower, Uttara, Dhaka, 1230</p>
        </div>
        <img style="width: 70px;  hight:auto"  class="middle"  src="/uploads/login/TUSHAR.PNG" alt="">
        <h1 class="contact-head">Contact Us</h1>
        <form class="contact-form" action="{{ route('contact.us') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <input type="submit" class="btn" value="Send Message">
        </form>
       
    </div>
</body>

</html>
