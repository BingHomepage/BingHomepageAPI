# BingHomepageAPI

This API provides information about Bing's current homepage image. Which includes image URL, copyright information and copyright link.

## Accessing the API

The API is publically available on my content delivery network (cdn) and can be requested in 3 formats.

### Link -- [https://cdn.muzzammil.xyz/bing/bing.php](https://cdn.muzzammil.xyz/bing/bing.php)

### Syntax

| Item                                                   | Description                    |
| ------------------------------------------------------ | ------------------------------ |
| **_cdn.muzzammil.xyz/bing/bing.php_**?format=xml&cc=US | API base link                  |
| cdn.muzzammil.xyz/bing/bing.php?**_format=xml_**&cc=US | Requested format               |
| cdn.muzzammil.xyz/bing/bing.php?format=xml&**_cc=US_** | Country Code\* for Bing Region |

##### \* - Two letter country codes only.

### Supported formats

| Format     | Content-type     | Example                                                   |
| ---------- | ---------------- | --------------------------------------------------------- |
| JSON       | application/json | https://cdn.muzzammil.xyz/bing/bing.php?format=json&cc=US |
| XML        | text/xml         | https://cdn.muzzammil.xyz/bing/bing.php?format=xml&cc=US  |
| Plain Text | text/plain       | https://cdn.muzzammil.xyz/bing/bing.php?format=text&cc=US |

## Returned Data

### Structure

Data returned would have three objects in total, viz., url, copyright, and copyrightlink.

### JSON

Below is the returned data from this [link](https://cdn.muzzammil.xyz/bing/bing.php?format=json&cc=US):

```json
{
  "url":
    "https://bing.com/az/hprichbg/rb/CometMoth_EN-US9387578049_1920x1080.jpg",
  "copyright":
    "Comet moth in Ranomafana National Park, Madagascar (© Robin Hoskyns/Minden Pictures)",
  "copyrightlink":
    "http://www.bing.com/search?q=comet+moth&form=hpcapt&filters=HpDate:%2220180721_0700%22"
}
```

### XML

Below is the returned data from this [link](https://cdn.muzzammil.xyz/bing/bing.php?format=xml&cc=US):

```xml
<image>
	<url>
		https://bing.com/az/hprichbg/rb/CometMoth_EN-US9387578049_1920x1080.jpg
	</url>
	<copyright>
		Comet moth in Ranomafana National Park, Madagascar (© Robin Hoskyns/Minden Pictures)
	</copyright>
	<copyrightlink>
		http://www.bing.com/search?q=comet+moth&form=hpcapt&filters=HpDate:%2220180721_0700%22
	</copyrightlink>
</image>
```

### Plain Text

Object description and data are seperated by a **greater-than** sign. On the left hand side of `>` there is description and on the right hand side, it's the data from API. You can use your native Split function here to do the job or think of a clever way do deal with this.

Below is the returned data from this [link](https://cdn.muzzammil.xyz/bing/bing.php?format=text&cc=US):

```txt
url>https://bing.com/az/hprichbg/rb/CometMoth_EN-US9387578049_1920x1080.jpg
copyright>Comet moth in Ranomafana National Park, Madagascar (© Robin Hoskyns/Minden Pictures)
copyrightlink>http://www.bing.com/search?q=comet+moth&form=hpcapt&filters=HpDate:%2220180721_0700%22
```

## Available libraries

| Language | Link                                                |
| -------- | --------------------------------------------------- |
| GoLang   | https://github.com/BingHomepage/BingHomepage.Go     |
| C#       | https://github.com/BingHomepage/BingHomepage.CSharp |
