'''
Created on 20 Sep. 2018

@author: juvia
'''
import urllib.request
from bs4 import BeautifulSoup
import json

url = "https://www.eventbrite.com.au/d/australia--brisbane-city/all-events/"
headers = {'user-agent':'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.3'}
request = urllib.request.Request(url,headers=headers)
html = urllib.request.urlopen(request).read()
soup = BeautifulSoup(html,'html.parser')
#First lets get the HTML of the table called site Table where all the links are displayed
main_table = soup.find("main",attrs={'data-spec':'search-results'})
#Now we go into main_table and get every a element in it which has a class "title" 
links = main_table.find_all("div",class_="eds-media-card-content__primary-content")

extracted_records = []
for link in links: 
    primaryLink = link.find("a",attrs={'class':'eds-media-card-content__action-link'});
    title = primaryLink.text
    url = primaryLink['href']
     
    record = {
        'title':title,
        'url':url
        }
    extracted_records.append(record)
 
#Lets write these to a JSON file for now. 
with open('data2.json', 'w') as outfile:
    json.dump(extracted_records, outfile, indent=4)
    
print("finished")
    

