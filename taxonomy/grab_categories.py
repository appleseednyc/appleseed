import logging
import urllib
import urllib2
import simplejson
import sys

logging.basicConfig(level=logging.INFO)

categories = [
    {'name': "Find something",
     'url': "finder"},
    {'name': "Transportation, Streets, and Sidewalks",
     'url': "Transportation%2C%20Streets%20and%20Sidewalks"},
    {'name': "Environment and Sanitation",
     'url': "Environment%20and%20Sanitation"},
    {'name': "Property, Buildings and Homes",
     'url': "Property%2C%20Buildings%20and%20Homes"},
    {'name': "Education and Employment",
     'url': "Education%20and%20Employment"},
    {'name': "Business and Finance",
     'url': "Business%20and%20Finance"},
    {'name': "Social Services",
     'url': "Social%20Services"},
    {'name': "Health and Medicine",
     'url': "Health%20and%20Medicine"},
    {'name': "Public Safety and Law",
     'url': "Public%20Safety%20and%20Law"},
    {'name': "Government and Civil Services",
     'url': "Government%20and%20Civil%20Services"}
    ]

URL = "http://www.nyc.gov/portal/apps/311_contentapi/services/%s.json"

def fetchData(cat):
    url = URL % cat
    logging.info("Fetching data from %s." % url)
    request = urllib2.Request(url, None, {})
    response = urllib2.urlopen(request)
    data = "\n".join(response.readlines())
    data = data.replace('\n', '')
    try:
        results = simplejson.loads(data)
        return results
    except simplejson.decoder.JSONDecodeError, e:
        logging.error(e)
        return None


def findDocumentURL(nyc_id):
    results = fetchData(nyc_id)
    if results:
        return results[0]['url']
    else:
        return ""

def main(argv):
    for cat in categories:
        logging.info("Processing %s" % cat)
        items = fetchData(cat['url'])
        if items:
            logging.info(len(items))
        else:
            logging.error("Cannot process %s." % cat)
            continue
        print '<optgroup label="%s">' % cat['name']
        for item in items:
            doc_link = findDocumentURL(item['id'])
            print '<option data-keywords="%s" data-link="%s">%s</option>' % (item['service_name'], doc_link, item['brief_description'])
        print '</optgroup>'

if __name__ == '__main__':
    main(sys.argv)
