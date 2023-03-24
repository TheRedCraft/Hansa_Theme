import requests as req

with req.Session() as s:
    url = 'https://hansa-schule.net/iserv/public/calendar?key=2a0ebb617fdd3e9df8f1c0974c23a335'
    file = s.get(url, allow_redirects=True)

    open('calenderimg.ics', 'wb').write(file.content)
