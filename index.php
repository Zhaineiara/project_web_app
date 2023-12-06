<!DOCTYPE html>
<html>
<head>
    <title>Resume Form</title>
    <link rel="shortcut icon" href="./pictures/gojo.jpg">
    <link rel="stylesheet" href="form.css">
</head>


<body>
    <h1 id="title">Welcome to Resume Generator</h1>

    <button id="openModal">Tap Here to Answer the Form</button>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <form method="post" action="resume.php">
                <h1 id="form_title">Resume Form</h1>
                <!--FULLNAME-->
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="FirstName" required><br><br>

                <label for="middleName">Middle Initial:</label>
                <input type="text" id="middleName" name="middleName" required><br><br>

                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required><br><br>

                <label for="job">Job/Position:</label>
                <input type="text" id="job" name="job" required><br><br>

                <label for="obj">Objectives in applying:</label>
                <input type="text" id="obj" name="obj" required><br><br>

                <!--CONTACTS-->
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br><br>

                <label for="CN">Contact Number:</label>
                <input type="text" id="CN" name="CN" required><br><br>

                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail" required><br><br>

                <label for="link">Linkedin:</label>
                <input type="text" id="link" name="link" required><br><br>

                <!--REFERENCE-->
                <label for="refname1">Reference Full Name 1:</label>
                <input type="text" id="refname1" name="refname1" required><br><br>

                <label for="refjob1">Reference Job Title 1:</label>
                <input type="text" id="refjob1" name="refjob1" required><br><br>

                <label for="refcompany1">Reference Company 1:</label>
                <input type="text" id="refcompany1" name="refcompany1" required><br><br>


                <label for="refname2">Reference Full Name 2:</label>
                <input type="text" id="refname2" name="refname2" required><br><br>

                <label for="refjob2">Reference Job Title 2:</label>
                <input type="text" id="refjob2" name="refjob2" required><br><br>

                <label for="refcompany2">Reference Company 2:</label>
                <input type="text" id="refcompany2" name="refcompany2" required><br><br>

                <!--PERSONAL DATA-->
                <label for="nn">Nickname:</label>
                <input type="text" id="nn" name="nn" required><br><br>

                <label>Gender:</label>
    
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
                
                <input type="radio" id="others" name="gender" value="Others">
                <label for="others">Others</label>
                <br><br>

                <label for="age">Age: </label>
                <input type="number" name="age" id="age" min="1" max="100" required><br><br>

                <label for="birth">Birthday: </label>
                <input type="date" id="birth" name="birth" required><br><br>

                <label>Status: &emsp;</label>
                <input type="radio" id="single" name="status" value="Single">
                <label for="single">Single</label> &emsp;&emsp;&nbsp;&nbsp;
    
                <input type="radio" id="married" name="status" value="Married">
                <label for="married">Married</label><br> &emsp;&emsp;&emsp;&emsp;

   
                <input type="radio" id="separated" name="status" value="Separated">
                <label for="separated">Separated</label> &emsp;
                
                <input type="radio" id="widowed" name="status" value="Widowed">
                <label for="widowed">Widowed</label> &emsp;&emsp;&emsp;&emsp;

                
                <input type="radio" id="divorced" name="status" value="Divorced">
                <label for="divorced">Divorced</label>&emsp;
                <br><br>

                <label for="religion">Religion: </label>
                <input type="text" id="religion" name="religion" required><br><br>

                <label for="citizen">Citizenship: </label>
                <input type="text" id="citizen" name="citizen" required><br><br>

                <!--SKILLS-->
                <label for="skill1">Skills 1:</label>
                <input type="text" id="skill1" name="skill1" required><br><br>

                <label for="skill2">Skills 2:</label>
                <input type="text" id="skill2" name="skill2" required><br><br>

                <label for="skill3">Skills 3:</label>
                <input type="text" id="skill3" name="skill3" required><br><br>

                <label for="skill4">Skills 4:</label>
                <input type="text" id="skill4" name="skill4" required><br><br>

                <label for="skill5">Skills 5:</label>
                <input type="text" id="skill5" name="skill5" required><br><br>

                <label for="skill6">Skills 6:</label>
                <input type="text" id="skill6" name="skill6" required><br><br>

                <label for="skill7">Skills 7:</label>
                <input type="text" id="skill7" name="skill7" required><br><br>

                <!--EDUCATION-->
                <label for="elem1">Elementary School 1:</label>
                <input type="text" id="elem1" name="elem1" required><br><br>

                <label for="elem2">Elementary School 2:</label>
                <input type="text" id="elem2" name="elem2" required><br><br>

                <label for="junior">Junior High School:</label>
                <input type="text" id="junior" name="junior" required><br><br>
                
                <label for="senior">Senior High School:</label>
                <input type="text" id="senior" name="senior" required><br><br>

                <label for="college">College:</label>
                <input type="text" id="college" name="college" required><br><br>


                <input id="submit_button" type="submit" value="Submit">
            </form>
        </div>
    </div>


  <script src="script.js"></script>


</body>
</html>


