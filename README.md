# Image-Upload-Core-PHP

1. Image Upload in projects is common phenomena.

2. On chosing image through browse image and clicking submit button, image will be saved in a folder directory.

3. This is done with the help of $_FILES concept of PHP

4. At the same time image name will be saved to the database

5. Fetching of Image will become quite easy.  

## Installation
1. Clone or Download the repository and keep it in server or local server(like XAMPP).

2. For this we are using MySQLi, sql file is present in the root directory

3. Create a Database and import the table

4. Configure the database connection in index.php

```
$conn = mysqli_connect("server_details", "username", "password", "database_name");  //connection with database

Eg. 

$conn = mysqli_connect("localhost", "root", "123456", "image_upload");  //connection with database

```

5.  uncomment line 52 i.e.  

```

echo "<img src='img/$fetch[1]'>"; 

```

6. Execute index.php file through server or local server

  
## Preview


![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443295/0d1e0fe2-2ac5-11e7-9718-49b1c084e4e7.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443298/1112de70-2ac5-11e7-9a04-8d7523d4ab99.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443308/14fa29d0-2ac5-11e7-9b12-dc01184bde67.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443272/fabc62b8-2ac4-11e7-8b2e-8dc799c425e6.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443278/fe92006e-2ac4-11e7-9b87-7ca0941a7f4b.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443282/01b2b928-2ac5-11e7-848e-8b049060fda4.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443287/04f36e02-2ac5-11e7-9e07-9536df0b04a8.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443291/09032190-2ac5-11e7-97fb-a9150e6b3a56.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>


<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

