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


![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557020/48977596-2d26-11e7-8494-7d71cf843d20.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557021/4adad794-2d26-11e7-9ef9-91045bc56717.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557022/4db0e526-2d26-11e7-8cc8-5f5b43ca4500.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557023/508f4666-2d26-11e7-915f-b33aea9af147.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557027/550179a8-2d26-11e7-84b4-f9d61f05ef02.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557029/59e5d9f0-2d26-11e7-92ac-ada02685ff7b.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload ](https://cloud.githubusercontent.com/assets/15896579/25557031/5fcd1f86-2d26-11e7-861b-7772b4560ac3.png?raw=true "Screenshot of Image Upload")
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

