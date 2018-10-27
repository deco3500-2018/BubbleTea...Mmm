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

### Documentation Structure
The BubbleTea...Mmm WIKI for In the Moment contains multiple pages documenting the design and build process of the application from Week 8 through to Week 13. Apart from the weekly breakdown of the team’s processes, the WIKI also includes a number of pages that are more relevant to the project as a whole. These pages fall under the ‘Key Pages’ and ‘Specifications’ category and contains documents such as the project proposal and the specification sheets from technical and UI perspectives. The documentation structure has been included below, with the links to each relevant page tied to its respective heading. For a short breakdown (in bullet point format) of what was the progress highlights for each section each week, refer to the WIKI (Home)[[https://github.com/deco3500-2018/BubbleTea...Mmm/wiki](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki)] page

#### Key Pages

-   [Project Proposal](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Proposal)
-   [Design Process Overview](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Design-Process-Overview)
    
#### Specifications

-   [Technical Specification](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/Technical-Spec-Sheet)    
-   [UI Specification](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/UI-Specification)
    

#### Progress Documentation
**Week 8**
-   [Research](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-8---Research](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-8---Research)
-   [Design](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-8---Design](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-8---Design)
 
**Week 9 & Mid-Sem Break**
-   [Research](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-Research)
-   [Design](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-Design)
-   [UX](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-&-Mid-Sem-UX)
-   [Development](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-9-&-Mid-Sem-Development)
  
**Week 10**
-   [Research](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-10-Research])
-   [Design](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-10-Design])
-   [Development](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-10-Development])

**Week 11**
- [Design](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-11-Design)
- [UX](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-11-UX)
- [Development](https://github.com/deco3500-2018/BubbleTea...Mmm/wiki/WEEK-11-Development)

**Week 12**
- [Design]()
- [Development]()

**Week 13**
- [Design]()
- [Development]()

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

### Using the Application (Walkthrough)
Given that installation and deployment of the source code was completed successfully, when using the application, follow these main steps to go through the use process of In the Moment. The application is designed with one ‘highlight’ feature, which is the recommendation process, and a series of trivial elements to enhance user experience, such as the comparison graph on the ‘home’ page, and the ‘explore’ and ‘account’ pages.

**1.  Pre-application  instructions**  
   1. If deploying the application through UQ server, the user will need to first enter their UQ login details in order to get access to the rest of the application’s pages. 
   
      OR       
      
   2.  If deploying from an external server, the user can skip having to enter their UQ login as there should be no other pre-application screens.
    

2.  **Login** - Once step 1 has been completed, the user will be shown a login screen that asks them to input their name. Without successfully submitting this screen, the user will not be able to access any of the other pages in the app as there is no valid session recognised by the system. Once the user enters their name, and submits the form, they will be redirected to a tutorial page.
    
3.  **Tutorial** - In the Moment has a on-boarding tutorial designed to quickly introduce users to the process they will follow when they do start using the application’s recommendation system. The tutorial page affords users two options:
	1.  **Read through tutorial** - the tutorial is presented in a card format that users can click through. Once the user has read through the tutorial, and clicked ‘finish’, they will be directed to the persona selection page.
	2. **Skip** - users are given the option to skip the tutorial if they believe that they should be able to use the app without it. On clicking the button to skip, users will be directed to the persona selection page.
    
4.  **Persona Selection** - The persona selection page essentially offers users a selection of personas presented in a carousel card format. Users will be required to choose one before they can be directed to the next step of the setup process. Once a persona has been selected, the user will be forwarded to the interest selection page.
    
5.  **Interest Selection** - The interest selection page the last step of the setup process and is where users are presented with a number of ‘interest’ boxes which are generated dynamically depending on the user’s selected persona from the previous page. Users are allowed to choose between minimum one to all the displayed options. Once the interest boxes have been selected, users will need to submit their selection through a submit button. Once submitted, users will be taken to the index page.
    
6. **Home (‘index’ page)** - The home page of the application, the main element here is the graph display that shows a vertical bar graph that displays the total free time the user has spent in a day (represented by the blue columns) compared to the average free time that others have spent (represented in the orange columns). The home page is essentially the starting point of the application, post-setup. This is where users will first see the global footer bar, which contains 3 main elements - home, start and explore. The home button redirects to the home page, the explore button redirects to the explore page and the start button is what users need to press in order to start the recommendation process.

8. Recommendation Process

   1.  Start
    
   10.  Input time
    
   11.  Select activity categories
    
   12.  Browse through provided options
    
   13.  Viewing selected option  

   14.  Time tracker
    
15.  Explore -
    
16.  Account (Logout)


## Promotional Materials
### Poster
![poster](https://i.imgur.com/Toy037G.png)

### Brochure/User Guide
![brochure](https://i.imgur.com/MgmKCYp.png)

***
