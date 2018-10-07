import httplib2, json
from apiclient import discovery
from oauth2client import client, file, tools
CS='client_secret.json'
FLOW=client.flow_from_clientsecrets(CS,
scope=[
    'https://www.googleapis.com/auth/plus.login',
    'https://www.googleapis.com/auth/userinfo.email'
])
# See https://developers.google.com/+/api/oauth
store=file.Storage('sample.dat')
crdntl=store.get()
if crdntl is None or crdntl.invalid:
    crdntl = tools.run_flow(FLOW, store)
http = crdntl.authorize(httplib2.Http())
srvc=discovery.build('plus','v1', http)
me=srvc.people().get(userId='me').execute()