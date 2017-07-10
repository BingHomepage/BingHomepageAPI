package main

import (
	"fmt"
	"io/ioutil"
	"net/http"
	"strings"
)

func main() {
	url, copyright, copyrightLink := BingHomepageAPI("US")
	fmt.Println(url)
	fmt.Println(copyright)
	fmt.Println(copyrightLink)
}
func BingHomepageAPI(countryCode string) (string, string, string) {
	api := "http://cdn.muzzammil.xyz/bing/bing.php?format=text&cc=" + countryCode
	resp, err := http.Get(api)
	defer resp.Body.Close()
	bingData, err := ioutil.ReadAll(resp.Body)
	if err != nil {
		panic(err)
	}
	return strings.Split(strings.Split(string(bingData), "\n")[0], ">")[1], strings.Split(strings.Split(string(bingData), "\n")[1], ">")[1], strings.Split(strings.Split(string(bingData), "\n")[2], ">")[1]
}
