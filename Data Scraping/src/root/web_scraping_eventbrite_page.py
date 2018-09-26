'''
Created on 20 Sep. 2018

@author: juvia
'''
import urllib.request
from bs4 import BeautifulSoup
import json

def parse_event_page (page_url):
    #Adding a User-Agent String in the request to prevent getting blocked while scraping 
    user_agent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.47 Safari/537.36'
    request = urllib.request.Request(page_url,headers={'User-Agent': user_agent})
    html = urllib.request.urlopen(request).read()
    soup = BeautifulSoup(html,'html.parser')
    main_information = soup.find('div',attrs={'class':'g-cell g-cell-1-1 g-cell-lg-4-12 g-cell--no-gutters listing-hero__detailed-info'})
    if main_information is not None:
        title = main_information.find('h1',attrs={'class':'listing-hero-title'}).text
        price = main_information.find('div',attrs={'class':'js-display-price'}).text
        
        main_description = soup.find('div',attrs={'class':'listing-info__body l-sm-pad-vert-0 l-sm-pad-vert-6 clrfix g-group g-group--page-margin-reset'})
        description = main_description.find('div',attrs= {'data-automation':'listing-event-description'}).text
        smallDescription = main_description.find('div',attrs= {'class':'event-details hide-small'}).text
    
        #Lets put the data in dict 
        post_data = {
            'title':title,
            'price':price,
            'description':description,
            'date and time and location':smallDescription,
        }
        return post_data
    else:
        return None
    

url = "https://www.eventbrite.com.au/d/australia--brisbane-city/all-events/"
headers = {'user-agent':'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.3'}
request = urllib.request.Request(url,headers=headers)
html = urllib.request.urlopen(request).read()
soup = BeautifulSoup(html,'html.parser')
#First lets get the HTML of the table called site Table where all the links are displayed
main_table = soup.find("main",attrs={'data-spec':'search-results'})
#Now we go into main_table and get every a element in it which has a class "title" 
links = main_table.find_all("section",class_="eds-l-pad-all-6 eds-media-card-content eds-media-card-content--list eds-media-card-content--standard eds-media-card-content--fixed")

extracted_data = []
for link in links: 
    primaryLink = link.find("a",attrs={'class':'eds-media-card-content__action-link'});
    title = primaryLink.text
    url = primaryLink['href']
    print('Extracting data from %s'%url)
    result = parse_event_page(url)
    if result is not None:
        extracted_data.append(parse_event_page(url))
    
 
#Lets write these to a JSON file for now. 
with open('data3.json', 'w') as outfile:
    json.dump(extracted_data, outfile, indent=4)
    
print("finished")
    

