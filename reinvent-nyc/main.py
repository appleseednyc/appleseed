#!/usr/bin/env python
#
# Copyright 2007 Google Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
from google.appengine.ext import webapp
from google.appengine.ext.webapp import util
from django.utils import simplejson
import urllib2
import logging
import urllib

URL = "http://www.nyc.gov/portal/apps/311_contentapi/services/%s.json"

class MainHandler(webapp.RequestHandler):
    def get(self):
        url = URL % urllib.quote(self.request.get('d'))
        logging.info(url)
        result = urllib2.urlopen(url).read()
        json = simplejson.loads(result)
        self.response.out.write(simplejson.dumps(json))

def main():
    application = webapp.WSGIApplication([('/', MainHandler)],
                                         debug=True)
    util.run_wsgi_app(application)


if __name__ == '__main__':
    main()
