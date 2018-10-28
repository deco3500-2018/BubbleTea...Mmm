# BubbleTea...Mmm
Read our [Proposal](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Proposal) over at our Wiki!

### Lovingly crafted by Bubble Tea...Mmm
![team_logo](https://i.imgur.com/rUqJnJw.png)



## Project Overview & Documentation Structure
### In the Moment Overview
The project addresses the theme of ‘Collective Action’ and interprets it in the context of an event and activity recommendation application to encourage lifestyle enrichment in workaholics. ‘In the Moment’ is a mobile application that drives personalised event and activity recommendations for workaholics based on their time, location and selected areas of interest. It features a time-tracking feature that shows them how much free time they have been spending in contrast to the collective public on a daily basis. The intention of this feature is to encourage them in a non-intrusive manner to spend more time on doing activities that they enjoy. 

Workaholics were selected as the primary target audience as they are a time poor user group to begin with and in the few pockets of free time that they do get, they might not know what they want to do. One of the most common results of workaholism is burn-out due to physical and mental exhaustion, and this results in a variety of physical and mental health issues. By encouraging workaholics to regularly take time out to de-stress and spend a few minutes completing activities that they enjoy and may help them relax, we hope to reduce the chances of burn out occurring for these individuals. 

In the Moment is an application that is built for users' personal gain, as it uses a dynamic recommendation process to help users find more activities they can do in a much shorter time. The key focus of In the Moment is that it considers how much free time the user has on hand in that particular spot in time. The system considers the time that they input against the time that activities generally take and automatically filters out options that don't fit the criteria. The system repeats this filtering again with the user's location by considering where the user is and where the recommended activities might be. For activities that are too far away, the system will not include it in the list of recommendations. 

Having narrowed down a set of results to recommend to the user, when the user selects their preferred option the system will present them with an activity card. Depending on the activity type, this card will contain information that introduces what the activity is about. For example, if it is an activity that requires instructions, the card will include quick links to popular introductory level tutorials to give the user a low barrier of entry starting point. 

The original project proposal for In the Moment can be read [here](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Proposal).

### Documentation Structure & Process Links
The BubbleTea...Mmm WIKI for In the Moment contains multiple pages documenting the design and build process of the application from Week 8 through to Week 13. Apart from the weekly breakdown of the team’s processes, the WIKI also includes a number of pages that are more relevant to the project as a whole. These pages fall under the ‘Key Pages’ and ‘Specifications’ category and contains documents such as the project proposal and the specification sheets from technical and UI perspectives. The documentation structure has been included below, with the links to each relevant page tied to its respective heading. For a short breakdown (in bullet point format) of what was the progress highlights for each section each week, refer to the WIKI [Home](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki) page

#### Key Pages
[Project Proposal](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Proposal), [Design Process Overview](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Design-Process-Overview), [Showcase](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-13-Showcase)
    
#### Specifications
[Technical Specification](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Technical-Spec-Sheet), [UI Specification](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/UI-Specification)
    
#### Research
[Week 8](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-8---Research), [Week 9](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-Research), [Week 10](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-10-Research)

#### Design
[Week 8](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-8---Design), [Week 9](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-Design), [Week 10](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-10-Design), [Week 11](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-11-Design), [Week 12](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-12-Design), [Week 13](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-13-Design)

#### UX
[Week 9](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-&-Mid-Sem-UX), [Week 11](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-11-UX)

#### Development
[Week 9](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-&-Mid-Sem-Development), [Week 10](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-10-Development), [Week 11](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-11-Development), [Week 12](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-12-Development), [Week 13](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-13-Development)

***

## Code Guide

**Folders**

-   **css folder** - contains all the styling sheets for the In the Moment application.
    
-   **img folder** - contains all the relevant images and icons used in the application. Images in this folder are split into their relevant sub-folders such as:    

    -   **activity** - icons that represent specific activities - displayed in the recommendation cards.
    
    -   **icons** - icons used for the persona cards
    
    -   **linkIcon** - company logos
    
    -   **specificActivity** - images for showing activities
    

-   **js folder** - contains the relevant JavaScript files for the application.
    
-   **old folder (prev version files)** - contains previous versions of some files, essentially there as a ‘backup’ folder for easy retrieval of old code.
    
-   **vendor folder** (for running facebook api to allow for login through facebook) - contains the files that are required in order to have ‘Login through Facebook’ working in the application.
    
-   **Data Scraping folder** - contains some demo python code to do data scraping on information within Reddit and Eventbrite.
    
Please note that both the vendor and data scraping folder are not currently used within the prototype; however, it provides a starting point for future development, for example:

-   Getting user’s interest from their social media account (i.e. facebook) rather than just having a default set of personas.
    
-   Data scraping actual events + activities than demo events hard-coded within the database.
    

**Files**

-   **README.md** - a readme guide to the repository
    
-   **account.php** - PHP script for the user account page, contains functionality for viewing associated interest areas and logging out of the application.
    
-   **activityRec.php** - PHP script for displaying details of specific activities with associated images and links related to it.
    
-   **activityRec_map.php** - PHP script that for displaying details of specific activities with includes a location. The page includes relevant information and a map with direction on how to get to that specific activity.
    
-   **activitySelection.php** - PHP script that generates a list of activities that the user can pick. The list is dynamic and based on the user’s previous input. (i.e. their interest, time, category)
    
-   **categorySelection.php** - PHP script for the user to select specific activity categories that they feel like doing today.
    
-   **error.php** - a helper PHP script that is used for debugging. It is used to display detailed PHP errors.
    
-   **explore.php** - PHP script that displays recommendations based on the user’s general interest areas and also activities that are trending. The recommendations shown in the ‘For you’ section are not dynamic to the selected persona.
    
-   **footer.php** - PHP script that contains the code for the global footer bar
    
-   **header.php** - PHP script containing the code for the header bar
    
-   **index.php** - PHP script for the home page of the application.
    
-   **interestSelection.php** - PHP script for the user to select their interests, the options are dynamic based on the persona they had chosen previously.
    
-   **inthemoment.sql** - the SQL file for the application database
    
-   **login.php** - login page for In the Moment, contains a form for users to input their name. Has PHP script to save the name input by the user when they submit the login form.
    
-   **personas.php** - PHP script that shows the user a selection of selectable personas in a card format. Each card has a select button that registers the selection of a particular persona. Contains a redirect to the interestSelection.php file upon selection of a persona.
    
-   **session.php** - PHP script for dealing with details transferred from different pages via ajax and contain the information in the correct session variables
    
-   **start.php** - PHP script included by almost every page to start a session and generate the connection to the InTheMoment database.
    
-   **timeSelection.php** - PHP script for the time selection page, contains input form for users to input their current available free time.
    

-  **tutorial.php** - PHP script for running the tutorial of the application

***

## Deployment Guide & Usage Instructions
### Deployment & Installation Guide
In the Moment is a progressive web app, therefore the deployment process is very similar to deploying a website. It is recommended that the developers first test the app on their local server and then transfer it to the actual server. Therefore below is a guide to deploying the app on both a local and a live server. 

#### For Development & Testing
In order to deploy In The Moment into a testing server, it is recommended to first download XAMPP, (https://www.apachefriends.org/index.html) a free and open-source cross-platform (windows and mac) PHP development environment. 

Once XAMPP has been downloaded and installed, go to XAMPP folder within your computer, typically within C:\xampp\htdocs\. Then create a new folder called *inthemoment* and transfer all source code within. 

In the Moment also requires a relational database server and XAMPP also includes phpmyadmin, an administration tool for MySQL. To access it, open wamp, navigate to http://localhost/phpmyadmin and log in through root account. Once the phpmyadmin dashboard is opened, create a new database and name it *inthemoment*. Then click on import on the header navigation and choose a file to import. In the Moment source code, there is a file called inthemoment.sql, import that file. It includes all necessary queries to set up the required tables and data. 

![import to database](https://i.imgur.com/6igS3tH.png)

Once the database has been set up, it is important that you change the login credentials within start.php to your own account and password to your phpmyadmin dashboard. 

![database connection](https://i.imgur.com/KXmpLlH.png)

Once the setup has been completed,  to test the source code, first run XAMPP and press start on the control panel. It will automatically set up a local server within your computer and can be accessed through http://localhost/inthemoment. 

![wampp](https://i2.wp.com/pureinfotech.com/wp-content/uploads/2016/03/xampp-control-panel-running.jpg?resize=668%2C434&quality=78&strip=all&ssl=1)

#### For Going Live
**On UQ**  
If you have a valid UQ account, you can deploy In the Moment through UQ cloud, a cloud hosting services offered by EAIT. First, you need to set up a web project zone (for the exact steps please refer to https://help.eait.uq.edu.au/smartos/) and then transfer the source code to the zone via FTP software such as FileZilla. (For more information on transfer the files please refer to https://its.uq.edu.au/node/1168/0#0) Lastly the export your local inthemoment database and import the SQL file to phpmyadmin dashboard on the UQ zone you had just set up. (Note please change the start.php to your phpmyadmin account)

**On your own server**
First set up your own public server by first register a domain name and then finding a web hosting company. After please ensure a MySQL database with phpMyAdmin is installed and export your local inthemoment database and import the SQL file. Please ensure that the app has been fully tested and then moves the source code to the live server through FTP software. 

**Important app viewing instructions**
In the Moment is designed to be a mobile application and has not been optimised for PC viewing, for the best experience please view the app on mobile.

If you are testing the app on your local computer server, please follow the following instructions to simulate mobile devices with device mode in Chrome DevTools.

1. Open the app on chrome

2. Right click on any part of the page and click **Inspect**.

![step2](https://i.imgur.com/T64S76x.png)

3. The inspector screen should be opened on the right side of the browser. Click on the small phone icon (**device toolbar**) the top header of the inspector.

![step3](https://i.imgur.com/6Yk1q0B.png)

4. You will be presented with a stimulation on how the app will look on mobile within chrome. You can also click on the top header to select a specific device you want to test app on. 

![step4](https://i.imgur.com/EJYoIH8.png)

**Note:** Testing on chrome is not a replacement for testing on a mobile device as the proportion may be different on an actual phone screen. 

### Using the Application (Walkthrough)

**Note:** If you want to use and walk through the current prototype on the UQ zone, you must have a valid UQ login. If you want access to the zone and database you must contact BubbleTea….Mmm. However, it is recommended to download the source code from Github and then set up your own server to test and deploy the app.

Given that installation and deployment of the source code was completed successfully, when using the application, follow these main steps to go through the use process of In the Moment. The application is designed with one ‘highlight’ feature, which is the recommendation process, and a series of trivial elements to enhance the user experience, such as the comparison graph on the ‘home’ page, and the ‘explore’ and ‘account’ pages. (For a more visual representation of the application walkthrough, please see brochure/ user guide at the end)

**1.  Pre-application  instructions** 
   1. If deploying the application through UQ server, you will need to first enter your UQ login details in order to get access to the rest of the application’s pages. 
   
      OR       
      
   2.  If deploying from an external server, the you can skip having to enter your UQ login as there should be no other pre-application screens. 
    
**2.  Login** - Once step 1 has been completed, you will be shown a login screen that asks them to input their name. Without successfully submitting this screen, you will not be able to access any of the other pages in the app as there is no valid session recognised by the system. Once you enters your name, and submits the form, you will be redirected to a tutorial page. 
    
**3.  Tutorial** - In the Moment has a onboarding tutorial designed to quickly introduce you to the process you will follow when you do start using the application’s recommendation system. The tutorial page affords you with two options: 
   1.  **Read through tutorial** - the tutorial is presented in a card format that you can click through. Once you have read through the tutorial, and clicked ‘finish’, you will be directed to the persona selection page. 
   2. **Skip** - you are given the option to skip the tutorial if they believe that you should be able to use the app without it. On clicking the button to skip, you will be directed to the persona selection page. 
    
**4.  Persona Selection** - The persona selection page essentially offers you a selection of personas presented in a carousel card format. You will be required to choose one before they can be directed to the next step of the setup process. Once a persona has been selected, the you will be forwarded to the interest selection page. 
    
**5.  Interest Selection** - The interest selection page the last step of the setup process and is where you are presented with a number of ‘interest’ boxes which are generated dynamically depending on the your selected persona from the previous page. You are allowed to choose between minimum one to all the displayed options. Once the interest boxes have been selected, you will need to submit their selection through a submit button. Once submitted, you will be taken to the index page. 
    
**6. Home (‘index’ page)** - The home page of the application, the main element here is the graph display that shows a vertical bar graph that displays the total free time you has spent in a day (represented by the blue columns) compared to the average free time that others have spent (represented in the orange columns). The home page is essentially the starting point of the application, post-setup. This is where you will first see the global footer bar, which contains 3 main elements - home, start and explore. The home button redirects to the home page, the explore button redirects to the explore page and the start button is what you need to press in order to start the recommendation process. 

**7. Recommendation Process**

   1.  **Start** - to start the recommendation process, you will need to first tap on the blue start button located in the middle of the footer bar. 
    
   10.  **Input time**  - after you had selected ‘start’, you will be directed to a page that asks you to input a number between 10-300 minutes into a textfield. After inputting a number and entering the form, you will be taken to a second page which asks them to select activity categories that interests you. 
    
   11.  **Select activity categories** - the category selection page shows you various activity categories that you can select, depending on what you feel like doing. The category selection allows you to select more than one category. Once you have selected their category(s), you will have to submit your selection in order to progress to the next step, which is where activity recommendations are presented to you.
    
   12.  **Browse through provided options** - based on the persona selected, the current time of the day, the current amount of free time the you has and the activity categories selected, the system will compile a pool of recommendations to present to you in a card format. You will be able to swipe through these cards and select an activity that interests you. Upon selection of a particular activity, you will be taken to a more detailed activity card dedicated to just that activity. If there is currently no activity that can fulfil the criteria, a message will be shown to you explaining that currently no suitable activity can be found for you. 

   13.  **Viewing selected option** - in the activity card, you will see an image representative of the activity, or a map if the activity is location based, at the top section of the card. If the activity requires instructions, the card will also contain quick links to tutorials to give users a ‘quick start’ directive. Having finished the activity, you can click back to the home page.

   14.  **Time tracker** - if you go back to the index page, the system will register that you have spent the time they input completing the activity. This is then communicated to the user through a dialog popup. The graph on the homepage will adjust the appropriate column to reflect the increased free time you have spent. 
    
**8.  Explore** - You can go to the explore page to view recommendations that you might like but are not recommended using the full recommendation process (e.g. not considering the current time or the user’s current amount of free time). The page also displays activities that that have been trending and pursued by other people recently.
    
**9.  Account (Logout)** - If you wish to log out of the application, you can tap the global account icon on the top right corner of the page and it will take you to the account page. This page has a logout button at the bottom for you to click in order to log out of the app. (Note: Once you had signed out, the app will not store your previous username, interest etc. Therefore if you go back to the app, you have to go through the whole process of setting up a persona, interest etc.)


## Promotional Materials
### Poster
![poster](https://i.imgur.com/Toy037G.png)

### Brochure/User Guide
![brochure](https://i.imgur.com/MgmKCYp.png)

***
