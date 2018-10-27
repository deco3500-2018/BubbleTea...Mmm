# BubbleTea...Mmm
Read our [Proposal](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Proposal) over at our Wiki!

### Lovingly crafted by Bubble Tea...Mmm
![team_logo](https://i.imgur.com/rUqJnJw.png)

## In the Moment Overview
The project addresses the theme of ‘Collective Action’ and interprets it in the context of an event and activity recommendation application to encourage lifestyle enrichment in young workaholics. ‘In the Moment’ is a mobile application that uses collective data to drive personalised event and activity recommendations for individuals based on their time, location and selected areas of interest. 

It builds upon existing event recommendation models on sites such as Eventbrite, Facebook Local and Meetup, and takes it a step further in using collective data to curate a selection of activities to the user. It primarily focuses on collecting user data to inform recommendation choices, and supplements the recommendation-generation process with web-scraping technology.

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

## Promotional Materials
### Poster
![poster](https://i.imgur.com/Toy037G.png)

### Brochure/User Guide
![brochure](https://i.imgur.com/MgmKCYp.png)

***
