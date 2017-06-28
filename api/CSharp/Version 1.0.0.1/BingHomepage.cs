/*
 * Licensed under MIT License by (c) Muhammad Muzzammil 2017 (http://muzzammil.xyz/)
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this 
 * software and associated documentation files (the "Software"), to deal in the Software 
 * without restriction, including without limitation the rights to use, copy, modify, 
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
 * permit persons to whom the Software is furnished to do so, subject to the following 
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all copies 
 * or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR 
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR 
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 
 * DEALINGS IN THE SOFTWARE.
 */
using System;
using System.Drawing;
using System.Xml;
using System.Net;

namespace BingHomepageAPI {
    /// <summary>
    /// Gets the current Bing Homepage Details.
    /// (c) Muhammad Muzzammil
    /// (http://muzzammil.xyz/)
    /// </summary>
    public class BingHomepage {
        private string url, copyright, copyrightLink;
        private XmlDocument xml;
        /// <summary>
        /// Initializes a new instance of the BingHomepageAPI.
        /// </summary>
        /// <param name="CountryCode">Country Code for which you want the image. Default: US.</param>
        public BingHomepage(String CountryCode) {
            try {
                xml = new XmlDocument();
                xml.Load("http://cdn.muzzammil.xyz/bing/bing.php?format=xml&lang=CSharp&type=dll&cc=" + CountryCode);
                url = xml.GetElementsByTagName("url")[0].InnerText;
                copyright = xml.GetElementsByTagName("copyright")[0].InnerText;
                copyrightLink = xml.GetElementsByTagName("copyrightlink")[0].InnerText;
            } catch (Exception) {
                throw new Exception("See muzzammil.xyz/git/bing");
            }
        }
        /// <summary>
        /// Initializes a new instance of the BingHomepageAPI.
        /// </summary>
        public BingHomepage() {
            try {
                xml = new XmlDocument();
                xml.Load("http://cdn.muzzammil.xyz/bing/bing.php?format=xml&lang=CSharp&type=dll&cc=US");
                url = xml.GetElementsByTagName("url")[0].InnerText;
                copyright = xml.GetElementsByTagName("copyright")[0].InnerText;
                copyrightLink = xml.GetElementsByTagName("copyrightlink")[0].InnerText;
            } catch (Exception) {
                throw new Exception("See muzzammil.xyz/git/bing");
            }
        }
        /// <summary>
        /// Downloads, stores, and returns the current Homepage Image.
        /// </summary>
        /// <param name="path">Path to where the Image should be downloaded.</param>
        /// <returns>Returns the downloaded image data.</returns>
        public Image GetImage(String path) {
            try {
                new WebClient().DownloadFile(url, path);
                return new Bitmap(path);
            } catch (Exception) {
                throw new Exception("See muzzammil.xyz/git/bing");
            }
        }
        /// <summary>
        /// Gets the image's URL on bing's server.
        /// </summary>
        public string GetImageUrl => url;
        /// <summary>
        /// Gets the Copyright information of the image.
        /// </summary>
        public string GetCopyright => copyright;
        /// <summary>
        /// Gets the Copyright Link of the image.
        /// </summary>
        public string GetCopyrightLink => copyrightLink;
    }
}
