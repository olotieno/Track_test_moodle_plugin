# Track_test_moodle_plugin

Track_test_moodle_plugin is a quizaccess plugin to capture the user's picture via webcam to identify who is attempting the Moodle Quiz. It will capture the picture automatically every 30 seconds and store it as a PNG image. 


This plugin will help you to capture random pictures via webcam when the student/user is attempting the Quiz. 
Before starting the quiz, it will ask for camera permission. By accepting the permission you will be able to see your picture and you can continue to answer the questions. It will act as a video recording service like everything is capturing so the user will don't try to do anything suspicious during the exam.

<p align="center">
<!--<img src="https://i.imgur.com/Vnw0Fhc.png"> -->
</p>


## Features
- Capture user/student images via web camera
- Can't access quiz if the user does not allow the camera
- Admin report and check any suspicious activity
- Will work with existing Question Bank and Quiz
- Webservice API for external call
- Images are stored in Moodledata as a small png image


## Configuration
>Download the plugin to install

> After installing the plugin, you can use the plugin by following:


- Go to you quiz setting (Edit Quiz): 
- Change the *Extra restrictions on attempts* to **must be acknowledged before starting an attempt**
- Done!
```
  Dashboard->My courses->Your Course Name->Lesson->Quiz Name->Edit settings
```
<p align="center">
<img src="https://i.imgur.com/rwTYQ9M.png" width="80%">
</p>

> Now you can attempt your quiz like this:
<p align="center">
<!--<img src="https://i.imgur.com/UB9Cihs.png" width="40%"> -->
</p>

> You can check the report from Admin Site:
<p align="center">
<!-- <img src="https://i.imgur.com/jQe52LB.png"> -->
</p>

# Webservie/API
 - To get the API allow the permission
 - Use Service URL like
  
    ```
        {YourServer}/webservice/rest/server.php?
        wstoken={XYZ}&
        wsfunction=quizaccess_proctoring_get_camshots&
        moodlewsrestformat=json&
        quizid={1}&
        userid={1}&
        courseid={1}
    ```





