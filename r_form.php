<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
}

body {
    background-color: #f2f2f2;
    padding: 40px 20px;
}

.formm {
    max-width: 600px;
    margin: auto;
    background-color: white;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 1px 20px rgba(0, 0, 0, 9);
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 10px;
}

form input[type="text"],form textarea,form select,form input[type="file"] {
    width: 100%;
    padding: 10px 12px;
    margin: 10px 0 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

form input[type="text"]:focus,
form textarea:focus,
form select:focus,
form input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

textarea {
    resize: vertical;
    min-height: 80px;
}

form input[type="radio"],
form input[type="checkbox"] {
    margin-right: 8px;
    margin-top: 10px;
}

form span {
    margin-left: 5px;
}

form input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

@media (max-width: 600px) {
    .formm {
        padding: 20px;
    }
}

    </style>
</head>
<body>
    <div class="formm">
    <h1>Registration Form</h1>
    <p>Please fill in the form below.</p><br><hr>
    <form method="post" action="r_form_process.php" enctype="multipart/form-data">
        <br>
        ID <input type="text" name="id" required><br>
        Full Name <input type="text" name="name" required><br>
        Address <textarea name="address"></textarea> <br>
        City <input type="text" name="city" required><br>
        State <input type="text" name="state" required><br><br>
        Postal / Zip Code <input type="text" name="zip_code" required><br>
        Country <select name="country">
            <option value="select">Select</option>
            <option value="india">India</option>
            <option value="us">US</option>
            <option value="uk">UK</option>
            <option value="russia">Russia</option>
            <option value="japan">Japan</option>
            <option value="dubai">Dubai</option>
            <option value="australia">Australia</option>
            <option value="others">Others</option>
        </select><br><br>
        You Are: <input type="radio" name="student" value="Student"> Student<br>
                 <input type="radio" name="student" value="Professional"> <span>Professional</span><br>
                 <input type="radio" name="student" value="Others"> <span>Others</span><br><br>
        Interested in (mark all that apply): <br>
        <input type="checkbox" name="global_p[]" value="PR Global Professionals"> PR Global Professionals <br>
        <input type="checkbox" name="global_p[]" value="PR Global Ventures"> PR Global Ventures <br>
        <input type="checkbox" name="global_p[]" value="Becoming a PR Global Ambassador"> Becoming a PR Global Ambassador <br>
        <input type="checkbox" name="global_p[]" value="Contacting a PR Global Ambassador"> Contacting a PR Global Ambassador <br><br>

        Resume: <input type="file" name="resume"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>