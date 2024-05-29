<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $icons = [
            [
                "title" => ".ENV",
                "slug" => "dotenv",
                "url" => "https://cdn.simpleicons.org/dotenv?viewbox=auto"
            ],
            [
            "title" => ".NET",
            "slug" => "dotnet",
            "url" => "https://cdn.simpleicons.org/dotnet?viewbox=auto"
            ],
            [
            "title" => "/e/",
            "slug" => "e",
            "url" => "https://cdn.simpleicons.org/e?viewbox=auto"
            ],
            [
            "title" => "1001Tracklists",
            "slug" => "1001tracklists",
            "url" => "https://cdn.simpleicons.org/1001tracklists?viewbox=auto"
            ],
            [
            "title" => "1Password",
            "slug" => "1password",
            "url" => "https://cdn.simpleicons.org/1password?viewbox=auto"
            ],
            [
            "title" => "2K",
            "slug" => "2k",
            "url" => "https://cdn.simpleicons.org/2k?viewbox=auto"
            ],
            [
            "title" => "365 Data Science",
            "slug" => "365datascience",
            "url" => "https://cdn.simpleicons.org/365datascience?viewbox=auto"
            ],
            [
            "title" => "3M",
            "slug" => "3m",
            "url" => "https://cdn.simpleicons.org/3m?viewbox=auto"
            ],
            [
            "title" => "42",
            "slug" => "42",
            "url" => "https://cdn.simpleicons.org/42?viewbox=auto"
            ],
            [
            "title" => "4chan",
            "slug" => "4chan",
            "url" => "https://cdn.simpleicons.org/4chan?viewbox=auto"
            ],
            [
            "title" => "4D",
            "slug" => "4d",
            "url" => "https://cdn.simpleicons.org/4d?viewbox=auto"
            ],
            [
            "title" => "500px",
            "slug" => "500px",
            "url" => "https://cdn.simpleicons.org/500px?viewbox=auto"
            ],
            [
            "title" => "7Zip",
            "slug" => "7zip",
            "url" => "https://cdn.simpleicons.org/7zip?viewbox=auto"
            ],
            [
            "title" => "99designs",
            "slug" => "99designs",
            "url" => "https://cdn.simpleicons.org/99designs?viewbox=auto"
            ],
            [
            "title" => "9GAG",
            "slug" => "9gag",
            "url" => "https://cdn.simpleicons.org/9gag?viewbox=auto"
            ],
            [
            "title" => "A-Frame",
            "slug" => "aframe",
            "url" => "https://cdn.simpleicons.org/aframe?viewbox=auto"
            ],
            [
            "title" => "ABB RobotStudio",
            "slug" => "abbrobotstudio",
            "url" => "https://cdn.simpleicons.org/abbrobotstudio?viewbox=auto"
            ],
            [
            "title" => "Abbott",
            "slug" => "abbott",
            "url" => "https://cdn.simpleicons.org/abbott?viewbox=auto"
            ],
            [
            "title" => "Abbvie",
            "slug" => "abbvie",
            "url" => "https://cdn.simpleicons.org/abbvie?viewbox=auto"
            ],
            [
            "title" => "About.me",
            "slug" => "aboutdotme",
            "url" => "https://cdn.simpleicons.org/aboutdotme?viewbox=auto"
            ],
            [
            "title" => "Abstract",
            "slug" => "abstract",
            "url" => "https://cdn.simpleicons.org/abstract?viewbox=auto"
            ],
            [
            "title" => "abuse.ch",
            "slug" => "abusedotch",
            "url" => "https://cdn.simpleicons.org/abusedotch?viewbox=auto"
            ],
            [
            "title" => "Academia",
            "slug" => "academia",
            "url" => "https://cdn.simpleicons.org/academia?viewbox=auto"
            ],
            [
            "title" => "Accenture",
            "slug" => "accenture",
            "url" => "https://cdn.simpleicons.org/accenture?viewbox=auto"
            ],
            [
            "title" => "Accusoft",
            "slug" => "accusoft",
            "url" => "https://cdn.simpleicons.org/accusoft?viewbox=auto"
            ],
            [
            "title" => "Acer",
            "slug" => "acer",
            "url" => "https://cdn.simpleicons.org/acer?viewbox=auto"
            ],
            [
            "title" => "ACM",
            "slug" => "acm",
            "url" => "https://cdn.simpleicons.org/acm?viewbox=auto"
            ],
            [
            "title" => "ActiGraph",
            "slug" => "actigraph",
            "url" => "https://cdn.simpleicons.org/actigraph?viewbox=auto"
            ],
            [
            "title" => "Activision",
            "slug" => "activision",
            "url" => "https://cdn.simpleicons.org/activision?viewbox=auto"
            ],
            [
            "title" => "ActivityPub",
            "slug" => "activitypub",
            "url" => "https://cdn.simpleicons.org/activitypub?viewbox=auto"
            ],
            [
            "title" => "Actix",
            "slug" => "actix",
            "url" => "https://cdn.simpleicons.org/actix?viewbox=auto"
            ],
            [
            "title" => "Acura",
            "slug" => "acura",
            "url" => "https://cdn.simpleicons.org/acura?viewbox=auto"
            ],
            [
            "title" => "Adafruit",
            "slug" => "adafruit",
            "url" => "https://cdn.simpleicons.org/adafruit?viewbox=auto"
            ],
            [
            "title" => "AdBlock",
            "slug" => "adblock",
            "url" => "https://cdn.simpleicons.org/adblock?viewbox=auto"
            ],
            [
            "title" => "Adblock Plus",
            "slug" => "adblockplus",
            "url" => "https://cdn.simpleicons.org/adblockplus?viewbox=auto"
            ],
            [
            "title" => "AdGuard",
            "slug" => "adguard",
            "url" => "https://cdn.simpleicons.org/adguard?viewbox=auto"
            ],
            [
            "title" => "Adidas",
            "slug" => "adidas",
            "url" => "https://cdn.simpleicons.org/adidas?viewbox=auto"
            ],
            [
            "title" => "Adminer",
            "slug" => "adminer",
            "url" => "https://cdn.simpleicons.org/adminer?viewbox=auto"
            ],
            [
            "title" => "Adobe",
            "slug" => "adobe",
            "url" => "https://cdn.simpleicons.org/adobe?viewbox=auto"
            ],
            [
            "title" => "Adobe Acrobat Reader",
            "slug" => "adobeacrobatreader",
            "url" => "https://cdn.simpleicons.org/adobeacrobatreader?viewbox=auto"
            ],
            [
            "title" => "Adobe After Effects",
            "slug" => "adobeaftereffects",
            "url" => "https://cdn.simpleicons.org/adobeaftereffects?viewbox=auto"
            ],
            [
            "title" => "Adobe Audition",
            "slug" => "adobeaudition",
            "url" => "https://cdn.simpleicons.org/adobeaudition?viewbox=auto"
            ],
            [
            "title" => "Adobe Creative Cloud",
            "slug" => "adobecreativecloud",
            "url" => "https://cdn.simpleicons.org/adobecreativecloud?viewbox=auto"
            ],
            [
            "title" => "Adobe Dreamweaver",
            "slug" => "adobedreamweaver",
            "url" => "https://cdn.simpleicons.org/adobedreamweaver?viewbox=auto"
            ],
            [
            "title" => "Adobe Fonts",
            "slug" => "adobefonts",
            "url" => "https://cdn.simpleicons.org/adobefonts?viewbox=auto"
            ],
            [
            "title" => "Adobe Illustrator",
            "slug" => "adobeillustrator",
            "url" => "https://cdn.simpleicons.org/adobeillustrator?viewbox=auto"
            ],
            [
            "title" => "Adobe InDesign",
            "slug" => "adobeindesign",
            "url" => "https://cdn.simpleicons.org/adobeindesign?viewbox=auto"
            ],
            [
            "title" => "Adobe Lightroom",
            "slug" => "adobelightroom",
            "url" => "https://cdn.simpleicons.org/adobelightroom?viewbox=auto"
            ],
            [
            "title" => "Adobe Lightroom Classic",
            "slug" => "adobelightroomclassic",
            "url" => "https://cdn.simpleicons.org/adobelightroomclassic?viewbox=auto"
            ],
            [
            "title" => "Adobe Photoshop",
            "slug" => "adobephotoshop",
            "url" => "https://cdn.simpleicons.org/adobephotoshop?viewbox=auto"
            ],
            [
            "title" => "Adobe Premiere Pro",
            "slug" => "adobepremierepro",
            "url" => "https://cdn.simpleicons.org/adobepremierepro?viewbox=auto"
            ],
            [
            "title" => "Adobe XD",
            "slug" => "adobexd",
            "url" => "https://cdn.simpleicons.org/adobexd?viewbox=auto"
            ],
            [
            "title" => "AdonisJS",
            "slug" => "adonisjs",
            "url" => "https://cdn.simpleicons.org/adonisjs?viewbox=auto"
            ],
            [
            "title" => "ADP",
            "slug" => "adp",
            "url" => "https://cdn.simpleicons.org/adp?viewbox=auto"
            ],
            [
            "title" => "Adroll",
            "slug" => "adroll",
            "url" => "https://cdn.simpleicons.org/adroll?viewbox=auto"
            ],
            [
            "title" => "Advent Of Code",
            "slug" => "adventofcode",
            "url" => "https://cdn.simpleicons.org/adventofcode?viewbox=auto"
            ],
            [
            "title" => "Adyen",
            "slug" => "adyen",
            "url" => "https://cdn.simpleicons.org/adyen?viewbox=auto"
            ],
            [
            "title" => "Aer Lingus",
            "slug" => "aerlingus",
            "url" => "https://cdn.simpleicons.org/aerlingus?viewbox=auto"
            ],
            [
            "title" => "Aeroflot",
            "slug" => "aeroflot",
            "url" => "https://cdn.simpleicons.org/aeroflot?viewbox=auto"
            ],
            [
            "title" => "Aeroméxico",
            "slug" => "aeromexico",
            "url" => "https://cdn.simpleicons.org/aeromexico?viewbox=auto"
            ],
            [
            "title" => "Aerospike",
            "slug" => "aerospike",
            "url" => "https://cdn.simpleicons.org/aerospike?viewbox=auto"
            ],
            [
            "title" => "AEW",
            "slug" => "aew",
            "url" => "https://cdn.simpleicons.org/aew?viewbox=auto"
            ],
            [
            "title" => "AFFiNE",
            "slug" => "affine",
            "url" => "https://cdn.simpleicons.org/affine?viewbox=auto"
            ],
            [
            "title" => "Affinity",
            "slug" => "affinity",
            "url" => "https://cdn.simpleicons.org/affinity?viewbox=auto"
            ],
            [
            "title" => "Affinity Designer",
            "slug" => "affinitydesigner",
            "url" => "https://cdn.simpleicons.org/affinitydesigner?viewbox=auto"
            ],
            [
            "title" => "Affinity Photo",
            "slug" => "affinityphoto",
            "url" => "https://cdn.simpleicons.org/affinityphoto?viewbox=auto"
            ],
            [
            "title" => "Affinity Publisher",
            "slug" => "affinitypublisher",
            "url" => "https://cdn.simpleicons.org/affinitypublisher?viewbox=auto"
            ],
            [
            "title" => "Afterpay",
            "slug" => "afterpay",
            "url" => "https://cdn.simpleicons.org/afterpay?viewbox=auto"
            ],
            [
            "title" => "Agora",
            "slug" => "agora",
            "url" => "https://cdn.simpleicons.org/agora?viewbox=auto"
            ],
            [
            "title" => "AI Dungeon",
            "slug" => "aidungeon",
            "url" => "https://cdn.simpleicons.org/aidungeon?viewbox=auto"
            ],
            [
            "title" => "AIB",
            "slug" => "aib",
            "url" => "https://cdn.simpleicons.org/aib?viewbox=auto"
            ],
            [
            "title" => "AIOHTTP",
            "slug" => "aiohttp",
            "url" => "https://cdn.simpleicons.org/aiohttp?viewbox=auto"
            ],
            [
            "title" => "Aiqfome",
            "slug" => "aiqfome",
            "url" => "https://cdn.simpleicons.org/aiqfome?viewbox=auto"
            ],
            [
            "title" => "Air Canada",
            "slug" => "aircanada",
            "url" => "https://cdn.simpleicons.org/aircanada?viewbox=auto"
            ],
            [
            "title" => "Air China",
            "slug" => "airchina",
            "url" => "https://cdn.simpleicons.org/airchina?viewbox=auto"
            ],
            [
            "title" => "Air France",
            "slug" => "airfrance",
            "url" => "https://cdn.simpleicons.org/airfrance?viewbox=auto"
            ],
            [
            "title" => "Air India",
            "slug" => "airindia",
            "url" => "https://cdn.simpleicons.org/airindia?viewbox=auto"
            ],
            [
            "title" => "Air Transat",
            "slug" => "airtransat",
            "url" => "https://cdn.simpleicons.org/airtransat?viewbox=auto"
            ],
            [
            "title" => "AirAsia",
            "slug" => "airasia",
            "url" => "https://cdn.simpleicons.org/airasia?viewbox=auto"
            ],
            [
            "title" => "Airbnb",
            "slug" => "airbnb",
            "url" => "https://cdn.simpleicons.org/airbnb?viewbox=auto"
            ],
            [
            "title" => "Airbrake",
            "slug" => "airbrake",
            "url" => "https://cdn.simpleicons.org/airbrake?viewbox=auto"
            ],
            [
            "title" => "Airbus",
            "slug" => "airbus",
            "url" => "https://cdn.simpleicons.org/airbus?viewbox=auto"
            ],
            [
            "title" => "Airbyte",
            "slug" => "airbyte",
            "url" => "https://cdn.simpleicons.org/airbyte?viewbox=auto"
            ],
            [
            "title" => "Aircall",
            "slug" => "aircall",
            "url" => "https://cdn.simpleicons.org/aircall?viewbox=auto"
            ],
            [
            "title" => "AirPlay Audio",
            "slug" => "airplayaudio",
            "url" => "https://cdn.simpleicons.org/airplayaudio?viewbox=auto"
            ],
            [
            "title" => "AirPlay Video",
            "slug" => "airplayvideo",
            "url" => "https://cdn.simpleicons.org/airplayvideo?viewbox=auto"
            ],
            [
            "title" => "Airtable",
            "slug" => "airtable",
            "url" => "https://cdn.simpleicons.org/airtable?viewbox=auto"
            ],
            [
            "title" => "Airtel",
            "slug" => "airtel",
            "url" => "https://cdn.simpleicons.org/airtel?viewbox=auto"
            ],
            [
            "title" => "Ajv",
            "slug" => "ajv",
            "url" => "https://cdn.simpleicons.org/ajv?viewbox=auto"
            ],
            [
            "title" => "Akamai",
            "slug" => "akamai",
            "url" => "https://cdn.simpleicons.org/akamai?viewbox=auto"
            ],
            [
            "title" => "Akaunting",
            "slug" => "akaunting",
            "url" => "https://cdn.simpleicons.org/akaunting?viewbox=auto"
            ],
            [
            "title" => "Akiflow",
            "slug" => "akiflow",
            "url" => "https://cdn.simpleicons.org/akiflow?viewbox=auto"
            ],
            [
            "title" => "Alacritty",
            "slug" => "alacritty",
            "url" => "https://cdn.simpleicons.org/alacritty?viewbox=auto"
            ],
            [
            "title" => "Alamy",
            "slug" => "alamy",
            "url" => "https://cdn.simpleicons.org/alamy?viewbox=auto"
            ],
            [
            "title" => "Albert Heijn",
            "slug" => "albertheijn",
            "url" => "https://cdn.simpleicons.org/albertheijn?viewbox=auto"
            ],
            [
            "title" => "Alby",
            "slug" => "alby",
            "url" => "https://cdn.simpleicons.org/alby?viewbox=auto"
            ],
            [
            "title" => "Alchemy",
            "slug" => "alchemy",
            "url" => "https://cdn.simpleicons.org/alchemy?viewbox=auto"
            ],
            [
            "title" => "Aldi Nord",
            "slug" => "aldinord",
            "url" => "https://cdn.simpleicons.org/aldinord?viewbox=auto"
            ],
            [
            "title" => "Aldi Süd",
            "slug" => "aldisud",
            "url" => "https://cdn.simpleicons.org/aldisud?viewbox=auto"
            ],
            [
            "title" => "Alfa Romeo",
            "slug" => "alfaromeo",
            "url" => "https://cdn.simpleicons.org/alfaromeo?viewbox=auto"
            ],
            [
            "title" => "Alfred",
            "slug" => "alfred",
            "url" => "https://cdn.simpleicons.org/alfred?viewbox=auto"
            ],
            [
            "title" => "Algolia",
            "slug" => "algolia",
            "url" => "https://cdn.simpleicons.org/algolia?viewbox=auto"
            ],
            [
            "title" => "Algorand",
            "slug" => "algorand",
            "url" => "https://cdn.simpleicons.org/algorand?viewbox=auto"
            ],
            [
            "title" => "Alibaba Cloud",
            "slug" => "alibabacloud",
            "url" => "https://cdn.simpleicons.org/alibabacloud?viewbox=auto"
            ],
            [
            "title" => "Alibaba.com",
            "slug" => "alibabadotcom",
            "url" => "https://cdn.simpleicons.org/alibabadotcom?viewbox=auto"
            ],
            [
            "title" => "Alienware",
            "slug" => "alienware",
            "url" => "https://cdn.simpleicons.org/alienware?viewbox=auto"
            ],
            [
            "title" => "AliExpress",
            "slug" => "aliexpress",
            "url" => "https://cdn.simpleicons.org/aliexpress?viewbox=auto"
            ],
            [
            "title" => "Alipay",
            "slug" => "alipay",
            "url" => "https://cdn.simpleicons.org/alipay?viewbox=auto"
            ],
            [
            "title" => "Allegro",
            "slug" => "allegro",
            "url" => "https://cdn.simpleicons.org/allegro?viewbox=auto"
            ],
            [
            "title" => "AlliedModders",
            "slug" => "alliedmodders",
            "url" => "https://cdn.simpleicons.org/alliedmodders?viewbox=auto"
            ],
            [
            "title" => "AlloCiné",
            "slug" => "allocine",
            "url" => "https://cdn.simpleicons.org/allocine?viewbox=auto"
            ],
            [
            "title" => "AllTrails",
            "slug" => "alltrails",
            "url" => "https://cdn.simpleicons.org/alltrails?viewbox=auto"
            ],
            [
            "title" => "AlmaLinux",
            "slug" => "almalinux",
            "url" => "https://cdn.simpleicons.org/almalinux?viewbox=auto"
            ],
            [
            "title" => "Alpine Linux",
            "slug" => "alpinelinux",
            "url" => "https://cdn.simpleicons.org/alpinelinux?viewbox=auto"
            ],
            [
            "title" => "Alpine.js",
            "slug" => "alpinedotjs",
            "url" => "https://cdn.simpleicons.org/alpinedotjs?viewbox=auto"
            ],
            [
            "title" => "Alteryx",
            "slug" => "alteryx",
            "url" => "https://cdn.simpleicons.org/alteryx?viewbox=auto"
            ],
            [
            "title" => "Altium Designer",
            "slug" => "altiumdesigner",
            "url" => "https://cdn.simpleicons.org/altiumdesigner?viewbox=auto"
            ],
            [
            "title" => "Alwaysdata",
            "slug" => "alwaysdata",
            "url" => "https://cdn.simpleicons.org/alwaysdata?viewbox=auto"
            ],
            [
            "title" => "ALX",
            "slug" => "alx",
            "url" => "https://cdn.simpleicons.org/alx?viewbox=auto"
            ],
            [
            "title" => "Amazon",
            "slug" => "amazon",
            "url" => "https://cdn.simpleicons.org/amazon?viewbox=auto"
            ],
            [
            "title" => "Amazon Alexa",
            "slug" => "amazonalexa",
            "url" => "https://cdn.simpleicons.org/amazonalexa?viewbox=auto"
            ],
            [
            "title" => "Amazon API Gateway",
            "slug" => "amazonapigateway",
            "url" => "https://cdn.simpleicons.org/amazonapigateway?viewbox=auto"
            ],
            [
            "title" => "Amazon CloudWatch",
            "slug" => "amazoncloudwatch",
            "url" => "https://cdn.simpleicons.org/amazoncloudwatch?viewbox=auto"
            ],
            [
            "title" => "Amazon Cognito",
            "slug" => "amazoncognito",
            "url" => "https://cdn.simpleicons.org/amazoncognito?viewbox=auto"
            ],
            [
            "title" => "Amazon DocumentDB",
            "slug" => "amazondocumentdb",
            "url" => "https://cdn.simpleicons.org/amazondocumentdb?viewbox=auto"
            ],
            [
            "title" => "Amazon DynamoDB",
            "slug" => "amazondynamodb",
            "url" => "https://cdn.simpleicons.org/amazondynamodb?viewbox=auto"
            ],
            [
            "title" => "Amazon EC2",
            "slug" => "amazonec2",
            "url" => "https://cdn.simpleicons.org/amazonec2?viewbox=auto"
            ],
            [
            "title" => "Amazon ECS",
            "slug" => "amazonecs",
            "url" => "https://cdn.simpleicons.org/amazonecs?viewbox=auto"
            ],
            [
            "title" => "Amazon EKS",
            "slug" => "amazoneks",
            "url" => "https://cdn.simpleicons.org/amazoneks?viewbox=auto"
            ],
            [
            "title" => "Amazon ElastiCache",
            "slug" => "amazonelasticache",
            "url" => "https://cdn.simpleicons.org/amazonelasticache?viewbox=auto"
            ],
            [
            "title" => "Amazon Fire TV",
            "slug" => "amazonfiretv",
            "url" => "https://cdn.simpleicons.org/amazonfiretv?viewbox=auto"
            ],
            [
            "title" => "Amazon Games",
            "slug" => "amazongames",
            "url" => "https://cdn.simpleicons.org/amazongames?viewbox=auto"
            ],
            [
            "title" => "Amazon Identity Access Management",
            "slug" => "amazonidentityaccessmanagement",
            "url" => "https://cdn.simpleicons.org/amazonidentityaccessmanagement?viewbox=auto"
            ],
            [
            "title" => "Amazon Lumberyard",
            "slug" => "amazonlumberyard",
            "url" => "https://cdn.simpleicons.org/amazonlumberyard?viewbox=auto"
            ],
            [
            "title" => "Amazon Luna",
            "slug" => "amazonluna",
            "url" => "https://cdn.simpleicons.org/amazonluna?viewbox=auto"
            ],
            [
            "title" => "Amazon Music",
            "slug" => "amazonmusic",
            "url" => "https://cdn.simpleicons.org/amazonmusic?viewbox=auto"
            ],
            [
            "title" => "Amazon Pay",
            "slug" => "amazonpay",
            "url" => "https://cdn.simpleicons.org/amazonpay?viewbox=auto"
            ],
            [
            "title" => "Amazon Prime",
            "slug" => "amazonprime",
            "url" => "https://cdn.simpleicons.org/amazonprime?viewbox=auto"
            ],
            [
            "title" => "Amazon RDS",
            "slug" => "amazonrds",
            "url" => "https://cdn.simpleicons.org/amazonrds?viewbox=auto"
            ],
            [
            "title" => "Amazon Redshift",
            "slug" => "amazonredshift",
            "url" => "https://cdn.simpleicons.org/amazonredshift?viewbox=auto"
            ],
            [
            "title" => "Amazon Route 53",
            "slug" => "amazonroute53",
            "url" => "https://cdn.simpleicons.org/amazonroute53?viewbox=auto"
            ],
            [
            "title" => "Amazon S3",
            "slug" => "amazons3",
            "url" => "https://cdn.simpleicons.org/amazons3?viewbox=auto"
            ],
            [
            "title" => "Amazon Simple Email Service",
            "slug" => "amazonsimpleemailservice",
            "url" => "https://cdn.simpleicons.org/amazonsimpleemailservice?viewbox=auto"
            ],
            [
            "title" => "Amazon SQS",
            "slug" => "amazonsqs",
            "url" => "https://cdn.simpleicons.org/amazonsqs?viewbox=auto"
            ],
            [
            "title" => "Amazon Web Services",
            "slug" => "amazonwebservices",
            "url" => "https://cdn.simpleicons.org/amazonwebservices?viewbox=auto"
            ],
            [
            "title" => "AMD",
            "slug" => "amd",
            "url" => "https://cdn.simpleicons.org/amd?viewbox=auto"
            ],
            [
            "title" => "Ameba",
            "slug" => "ameba",
            "url" => "https://cdn.simpleicons.org/ameba?viewbox=auto"
            ],
            [
            "title" => "American Airlines",
            "slug" => "americanairlines",
            "url" => "https://cdn.simpleicons.org/americanairlines?viewbox=auto"
            ],
            [
            "title" => "American Express",
            "slug" => "americanexpress",
            "url" => "https://cdn.simpleicons.org/americanexpress?viewbox=auto"
            ],
            [
            "title" => "AMG",
            "slug" => "amg",
            "url" => "https://cdn.simpleicons.org/amg?viewbox=auto"
            ],
            [
            "title" => "AMP",
            "slug" => "amp",
            "url" => "https://cdn.simpleicons.org/amp?viewbox=auto"
            ],
            [
            "title" => "Amul",
            "slug" => "amul",
            "url" => "https://cdn.simpleicons.org/amul?viewbox=auto"
            ],
            [
            "title" => "ANA",
            "slug" => "ana",
            "url" => "https://cdn.simpleicons.org/ana?viewbox=auto"
            ],
            [
            "title" => "Anaconda",
            "slug" => "anaconda",
            "url" => "https://cdn.simpleicons.org/anaconda?viewbox=auto"
            ],
            [
            "title" => "Analogue",
            "slug" => "analogue",
            "url" => "https://cdn.simpleicons.org/analogue?viewbox=auto"
            ],
            [
            "title" => "Andela",
            "slug" => "andela",
            "url" => "https://cdn.simpleicons.org/andela?viewbox=auto"
            ],
            [
            "title" => "Android",
            "slug" => "android",
            "url" => "https://cdn.simpleicons.org/android?viewbox=auto"
            ],
            [
            "title" => "Android Auto",
            "slug" => "androidauto",
            "url" => "https://cdn.simpleicons.org/androidauto?viewbox=auto"
            ],
            [
            "title" => "Android Studio",
            "slug" => "androidstudio",
            "url" => "https://cdn.simpleicons.org/androidstudio?viewbox=auto"
            ],
            [
            "title" => "Angular",
            "slug" => "angular",
            "url" => "https://cdn.simpleicons.org/angular?viewbox=auto"
            ],
            [
            "title" => "AniList",
            "slug" => "anilist",
            "url" => "https://cdn.simpleicons.org/anilist?viewbox=auto"
            ],
            [
            "title" => "Animal Planet",
            "slug" => "animalplanet",
            "url" => "https://cdn.simpleicons.org/animalplanet?viewbox=auto"
            ],
            [
            "title" => "AnkerMake",
            "slug" => "ankermake",
            "url" => "https://cdn.simpleicons.org/ankermake?viewbox=auto"
            ],
            [
            "title" => "Ansible",
            "slug" => "ansible",
            "url" => "https://cdn.simpleicons.org/ansible?viewbox=auto"
            ],
            [
            "title" => "Answer",
            "slug" => "answer",
            "url" => "https://cdn.simpleicons.org/answer?viewbox=auto"
            ],
            [
            "title" => "Ansys",
            "slug" => "ansys",
            "url" => "https://cdn.simpleicons.org/ansys?viewbox=auto"
            ],
            [
            "title" => "Ant Design",
            "slug" => "antdesign",
            "url" => "https://cdn.simpleicons.org/antdesign?viewbox=auto"
            ],
            [
            "title" => "Anta",
            "slug" => "anta",
            "url" => "https://cdn.simpleicons.org/anta?viewbox=auto"
            ],
            [
            "title" => "Antena 3",
            "slug" => "antena3",
            "url" => "https://cdn.simpleicons.org/antena3?viewbox=auto"
            ],
            [
            "title" => "Anthropic",
            "slug" => "anthropic",
            "url" => "https://cdn.simpleicons.org/anthropic?viewbox=auto"
            ],
            [
            "title" => "Anycubic",
            "slug" => "anycubic",
            "url" => "https://cdn.simpleicons.org/anycubic?viewbox=auto"
            ],
            [
            "title" => "AnyDesk",
            "slug" => "anydesk",
            "url" => "https://cdn.simpleicons.org/anydesk?viewbox=auto"
            ],
            [
            "title" => "Anytype",
            "slug" => "anytype",
            "url" => "https://cdn.simpleicons.org/anytype?viewbox=auto"
            ],
            [
            "title" => "AOL",
            "slug" => "aol",
            "url" => "https://cdn.simpleicons.org/aol?viewbox=auto"
            ],
            [
            "title" => "Apache",
            "slug" => "apache",
            "url" => "https://cdn.simpleicons.org/apache?viewbox=auto"
            ],
            [
            "title" => "Apache Airflow",
            "slug" => "apacheairflow",
            "url" => "https://cdn.simpleicons.org/apacheairflow?viewbox=auto"
            ],
            [
            "title" => "Apache Ant",
            "slug" => "apacheant",
            "url" => "https://cdn.simpleicons.org/apacheant?viewbox=auto"
            ],
            [
            "title" => "Apache Cassandra",
            "slug" => "apachecassandra",
            "url" => "https://cdn.simpleicons.org/apachecassandra?viewbox=auto"
            ],
            [
            "title" => "Apache CloudStack",
            "slug" => "apachecloudstack",
            "url" => "https://cdn.simpleicons.org/apachecloudstack?viewbox=auto"
            ],
            [
            "title" => "Apache Cordova",
            "slug" => "apachecordova",
            "url" => "https://cdn.simpleicons.org/apachecordova?viewbox=auto"
            ],
            [
            "title" => "Apache CouchDB",
            "slug" => "apachecouchdb",
            "url" => "https://cdn.simpleicons.org/apachecouchdb?viewbox=auto"
            ],
            [
            "title" => "Apache Druid",
            "slug" => "apachedruid",
            "url" => "https://cdn.simpleicons.org/apachedruid?viewbox=auto"
            ],
            [
            "title" => "Apache ECharts",
            "slug" => "apacheecharts",
            "url" => "https://cdn.simpleicons.org/apacheecharts?viewbox=auto"
            ],
            [
            "title" => "Apache Flink",
            "slug" => "apacheflink",
            "url" => "https://cdn.simpleicons.org/apacheflink?viewbox=auto"
            ],
            [
            "title" => "Apache FreeMarker",
            "slug" => "apachefreemarker",
            "url" => "https://cdn.simpleicons.org/apachefreemarker?viewbox=auto"
            ],
            [
            "title" => "Apache Groovy",
            "slug" => "apachegroovy",
            "url" => "https://cdn.simpleicons.org/apachegroovy?viewbox=auto"
            ],
            [
            "title" => "Apache Guacamole",
            "slug" => "apacheguacamole",
            "url" => "https://cdn.simpleicons.org/apacheguacamole?viewbox=auto"
            ],
            [
            "title" => "Apache Hadoop",
            "slug" => "apachehadoop",
            "url" => "https://cdn.simpleicons.org/apachehadoop?viewbox=auto"
            ],
            [
            "title" => "Apache HBase",
            "slug" => "apachehbase",
            "url" => "https://cdn.simpleicons.org/apachehbase?viewbox=auto"
            ],
            [
            "title" => "Apache Hive",
            "slug" => "apachehive",
            "url" => "https://cdn.simpleicons.org/apachehive?viewbox=auto"
            ],
            [
            "title" => "Apache JMeter",
            "slug" => "apachejmeter",
            "url" => "https://cdn.simpleicons.org/apachejmeter?viewbox=auto"
            ],
            [
            "title" => "Apache Kafka",
            "slug" => "apachekafka",
            "url" => "https://cdn.simpleicons.org/apachekafka?viewbox=auto"
            ],
            [
            "title" => "Apache Kylin",
            "slug" => "apachekylin",
            "url" => "https://cdn.simpleicons.org/apachekylin?viewbox=auto"
            ],
            [
            "title" => "Apache Maven",
            "slug" => "apachemaven",
            "url" => "https://cdn.simpleicons.org/apachemaven?viewbox=auto"
            ],
            [
            "title" => "Apache NetBeans IDE",
            "slug" => "apachenetbeanside",
            "url" => "https://cdn.simpleicons.org/apachenetbeanside?viewbox=auto"
            ],
            [
            "title" => "Apache OpenOffice",
            "slug" => "apacheopenoffice",
            "url" => "https://cdn.simpleicons.org/apacheopenoffice?viewbox=auto"
            ],
            [
            "title" => "Apache Parquet",
            "slug" => "apacheparquet",
            "url" => "https://cdn.simpleicons.org/apacheparquet?viewbox=auto"
            ],
            [
            "title" => "Apache Pulsar",
            "slug" => "apachepulsar",
            "url" => "https://cdn.simpleicons.org/apachepulsar?viewbox=auto"
            ],
            [
            "title" => "Apache RocketMQ",
            "slug" => "apacherocketmq",
            "url" => "https://cdn.simpleicons.org/apacherocketmq?viewbox=auto"
            ],
            [
            "title" => "Apache Solr",
            "slug" => "apachesolr",
            "url" => "https://cdn.simpleicons.org/apachesolr?viewbox=auto"
            ],
            [
            "title" => "Apache Spark",
            "slug" => "apachespark",
            "url" => "https://cdn.simpleicons.org/apachespark?viewbox=auto"
            ],
            [
            "title" => "Apache Storm",
            "slug" => "apachestorm",
            "url" => "https://cdn.simpleicons.org/apachestorm?viewbox=auto"
            ],
            [
            "title" => "Apache Superset",
            "slug" => "apachesuperset",
            "url" => "https://cdn.simpleicons.org/apachesuperset?viewbox=auto"
            ],
            [
            "title" => "Apache Tomcat",
            "slug" => "apachetomcat",
            "url" => "https://cdn.simpleicons.org/apachetomcat?viewbox=auto"
            ],
            [
            "title" => "Aparat",
            "slug" => "aparat",
            "url" => "https://cdn.simpleicons.org/aparat?viewbox=auto"
            ],
            [
            "title" => "Apifox",
            "slug" => "apifox",
            "url" => "https://cdn.simpleicons.org/apifox?viewbox=auto"
            ],
            [
            "title" => "APM Terminals",
            "slug" => "apmterminals",
            "url" => "https://cdn.simpleicons.org/apmterminals?viewbox=auto"
            ],
            [
            "title" => "Apollo GraphQL",
            "slug" => "apollographql",
            "url" => "https://cdn.simpleicons.org/apollographql?viewbox=auto"
            ],
            [
            "title" => "Apostrophe",
            "slug" => "apostrophe",
            "url" => "https://cdn.simpleicons.org/apostrophe?viewbox=auto"
            ],
            [
            "title" => "App Store",
            "slug" => "appstore",
            "url" => "https://cdn.simpleicons.org/appstore?viewbox=auto"
            ],
            [
            "title" => "Appian",
            "slug" => "appian",
            "url" => "https://cdn.simpleicons.org/appian?viewbox=auto"
            ],
            [
            "title" => "Appium",
            "slug" => "appium",
            "url" => "https://cdn.simpleicons.org/appium?viewbox=auto"
            ],
            [
            "title" => "Apple",
            "slug" => "apple",
            "url" => "https://cdn.simpleicons.org/apple?viewbox=auto"
            ],
            [
            "title" => "Apple Arcade",
            "slug" => "applearcade",
            "url" => "https://cdn.simpleicons.org/applearcade?viewbox=auto"
            ],
            [
            "title" => "Apple Music",
            "slug" => "applemusic",
            "url" => "https://cdn.simpleicons.org/applemusic?viewbox=auto"
            ],
            [
            "title" => "Apple News",
            "slug" => "applenews",
            "url" => "https://cdn.simpleicons.org/applenews?viewbox=auto"
            ],
            [
            "title" => "Apple Pay",
            "slug" => "applepay",
            "url" => "https://cdn.simpleicons.org/applepay?viewbox=auto"
            ],
            [
            "title" => "Apple Podcasts",
            "slug" => "applepodcasts",
            "url" => "https://cdn.simpleicons.org/applepodcasts?viewbox=auto"
            ],
            [
            "title" => "Apple TV",
            "slug" => "appletv",
            "url" => "https://cdn.simpleicons.org/appletv?viewbox=auto"
            ],
            [
            "title" => "AppSignal",
            "slug" => "appsignal",
            "url" => "https://cdn.simpleicons.org/appsignal?viewbox=auto"
            ],
            [
            "title" => "Appsmith",
            "slug" => "appsmith",
            "url" => "https://cdn.simpleicons.org/appsmith?viewbox=auto"
            ],
            [
            "title" => "AppVeyor",
            "slug" => "appveyor",
            "url" => "https://cdn.simpleicons.org/appveyor?viewbox=auto"
            ],
            [
            "title" => "Appwrite",
            "slug" => "appwrite",
            "url" => "https://cdn.simpleicons.org/appwrite?viewbox=auto"
            ],
            [
            "title" => "Aqua",
            "slug" => "aqua",
            "url" => "https://cdn.simpleicons.org/aqua?viewbox=auto"
            ],
            [
            "title" => "ARAL",
            "slug" => "aral",
            "url" => "https://cdn.simpleicons.org/aral?viewbox=auto"
            ],
            [
            "title" => "ArangoDB",
            "slug" => "arangodb",
            "url" => "https://cdn.simpleicons.org/arangodb?viewbox=auto"
            ],
            [
            "title" => "Arc",
            "slug" => "arc",
            "url" => "https://cdn.simpleicons.org/arc?viewbox=auto"
            ],
            [
            "title" => "ArcGIS",
            "slug" => "arcgis",
            "url" => "https://cdn.simpleicons.org/arcgis?viewbox=auto"
            ],
            [
            "title" => "Arch Linux",
            "slug" => "archlinux",
            "url" => "https://cdn.simpleicons.org/archlinux?viewbox=auto"
            ],
            [
            "title" => "Archicad",
            "slug" => "archicad",
            "url" => "https://cdn.simpleicons.org/archicad?viewbox=auto"
            ],
            [
            "title" => "Archive of Our Own",
            "slug" => "archiveofourown",
            "url" => "https://cdn.simpleicons.org/archiveofourown?viewbox=auto"
            ],
            [
            "title" => "Ardour",
            "slug" => "ardour",
            "url" => "https://cdn.simpleicons.org/ardour?viewbox=auto"
            ],
            [
            "title" => "Arduino",
            "slug" => "arduino",
            "url" => "https://cdn.simpleicons.org/arduino?viewbox=auto"
            ],
            [
            "title" => "Argo",
            "slug" => "argo",
            "url" => "https://cdn.simpleicons.org/argo?viewbox=auto"
            ],
            [
            "title" => "Argos",
            "slug" => "argos",
            "url" => "https://cdn.simpleicons.org/argos?viewbox=auto"
            ],
            [
            "title" => "Ariakit",
            "slug" => "ariakit",
            "url" => "https://cdn.simpleicons.org/ariakit?viewbox=auto"
            ],
            [
            "title" => "ARK Ecosystem",
            "slug" => "arkecosystem",
            "url" => "https://cdn.simpleicons.org/arkecosystem?viewbox=auto"
            ],
            [
            "title" => "Arlo",
            "slug" => "arlo",
            "url" => "https://cdn.simpleicons.org/arlo?viewbox=auto"
            ],
            [
            "title" => "Arm",
            "slug" => "arm",
            "url" => "https://cdn.simpleicons.org/arm?viewbox=auto"
            ],
            [
            "title" => "Arm Keil",
            "slug" => "armkeil",
            "url" => "https://cdn.simpleicons.org/armkeil?viewbox=auto"
            ],
            [
            "title" => "Ars Technica",
            "slug" => "arstechnica",
            "url" => "https://cdn.simpleicons.org/arstechnica?viewbox=auto"
            ],
            [
            "title" => "Artifact Hub",
            "slug" => "artifacthub",
            "url" => "https://cdn.simpleicons.org/artifacthub?viewbox=auto"
            ],
            [
            "title" => "Artix Linux",
            "slug" => "artixlinux",
            "url" => "https://cdn.simpleicons.org/artixlinux?viewbox=auto"
            ],
            [
            "title" => "ArtStation",
            "slug" => "artstation",
            "url" => "https://cdn.simpleicons.org/artstation?viewbox=auto"
            ],
            [
            "title" => "arXiv",
            "slug" => "arxiv",
            "url" => "https://cdn.simpleicons.org/arxiv?viewbox=auto"
            ],
            [
            "title" => "Asahi Linux",
            "slug" => "asahilinux",
            "url" => "https://cdn.simpleicons.org/asahilinux?viewbox=auto"
            ],
            [
            "title" => "Asana",
            "slug" => "asana",
            "url" => "https://cdn.simpleicons.org/asana?viewbox=auto"
            ],
            [
            "title" => "Asciidoctor",
            "slug" => "asciidoctor",
            "url" => "https://cdn.simpleicons.org/asciidoctor?viewbox=auto"
            ],
            [
            "title" => "asciinema",
            "slug" => "asciinema",
            "url" => "https://cdn.simpleicons.org/asciinema?viewbox=auto"
            ],
            [
            "title" => "ASDA",
            "slug" => "asda",
            "url" => "https://cdn.simpleicons.org/asda?viewbox=auto"
            ],
            [
            "title" => "Aseprite",
            "slug" => "aseprite",
            "url" => "https://cdn.simpleicons.org/aseprite?viewbox=auto"
            ],
            [
            "title" => "ASKfm",
            "slug" => "askfm",
            "url" => "https://cdn.simpleicons.org/askfm?viewbox=auto"
            ],
            [
            "title" => "AssemblyScript",
            "slug" => "assemblyscript",
            "url" => "https://cdn.simpleicons.org/assemblyscript?viewbox=auto"
            ],
            [
            "title" => "Aston Martin",
            "slug" => "astonmartin",
            "url" => "https://cdn.simpleicons.org/astonmartin?viewbox=auto"
            ],
            [
            "title" => "Astro",
            "slug" => "astro",
            "url" => "https://cdn.simpleicons.org/astro?viewbox=auto"
            ],
            [
            "title" => "ASUS",
            "slug" => "asus",
            "url" => "https://cdn.simpleicons.org/asus?viewbox=auto"
            ],
            [
            "title" => "AT&T",
            "slug" => "atandt",
            "url" => "https://cdn.simpleicons.org/atandt?viewbox=auto"
            ],
            [
            "title" => "Atari",
            "slug" => "atari",
            "url" => "https://cdn.simpleicons.org/atari?viewbox=auto"
            ],
            [
            "title" => "Atlassian",
            "slug" => "atlassian",
            "url" => "https://cdn.simpleicons.org/atlassian?viewbox=auto"
            ],
            [
            "title" => "Auchan",
            "slug" => "auchan",
            "url" => "https://cdn.simpleicons.org/auchan?viewbox=auto"
            ],
            [
            "title" => "Audacity",
            "slug" => "audacity",
            "url" => "https://cdn.simpleicons.org/audacity?viewbox=auto"
            ],
            [
            "title" => "Audi",
            "slug" => "audi",
            "url" => "https://cdn.simpleicons.org/audi?viewbox=auto"
            ],
            [
            "title" => "Audible",
            "slug" => "audible",
            "url" => "https://cdn.simpleicons.org/audible?viewbox=auto"
            ],
            [
            "title" => "Audio-Technica",
            "slug" => "audiotechnica",
            "url" => "https://cdn.simpleicons.org/audiotechnica?viewbox=auto"
            ],
            [
            "title" => "Audiobookshelf",
            "slug" => "audiobookshelf",
            "url" => "https://cdn.simpleicons.org/audiobookshelf?viewbox=auto"
            ],
            [
            "title" => "Audioboom",
            "slug" => "audioboom",
            "url" => "https://cdn.simpleicons.org/audioboom?viewbox=auto"
            ],
            [
            "title" => "Audiomack",
            "slug" => "audiomack",
            "url" => "https://cdn.simpleicons.org/audiomack?viewbox=auto"
            ],
            [
            "title" => "Aurelia",
            "slug" => "aurelia",
            "url" => "https://cdn.simpleicons.org/aurelia?viewbox=auto"
            ],
            [
            "title" => "Auth0",
            "slug" => "auth0",
            "url" => "https://cdn.simpleicons.org/auth0?viewbox=auto"
            ],
            [
            "title" => "Authelia",
            "slug" => "authelia",
            "url" => "https://cdn.simpleicons.org/authelia?viewbox=auto"
            ],
            [
            "title" => "Authentik",
            "slug" => "authentik",
            "url" => "https://cdn.simpleicons.org/authentik?viewbox=auto"
            ],
            [
            "title" => "Authy",
            "slug" => "authy",
            "url" => "https://cdn.simpleicons.org/authy?viewbox=auto"
            ],
            [
            "title" => "AutoCAD",
            "slug" => "autocad",
            "url" => "https://cdn.simpleicons.org/autocad?viewbox=auto"
            ],
            [
            "title" => "Autodesk",
            "slug" => "autodesk",
            "url" => "https://cdn.simpleicons.org/autodesk?viewbox=auto"
            ],
            [
            "title" => "Autodesk Maya",
            "slug" => "autodeskmaya",
            "url" => "https://cdn.simpleicons.org/autodeskmaya?viewbox=auto"
            ],
            [
            "title" => "Autodesk Revit",
            "slug" => "autodeskrevit",
            "url" => "https://cdn.simpleicons.org/autodeskrevit?viewbox=auto"
            ],
            [
            "title" => "AutoHotkey",
            "slug" => "autohotkey",
            "url" => "https://cdn.simpleicons.org/autohotkey?viewbox=auto"
            ],
            [
            "title" => "AutoIt",
            "slug" => "autoit",
            "url" => "https://cdn.simpleicons.org/autoit?viewbox=auto"
            ],
            [
            "title" => "Automattic",
            "slug" => "automattic",
            "url" => "https://cdn.simpleicons.org/automattic?viewbox=auto"
            ],
            [
            "title" => "Autoprefixer",
            "slug" => "autoprefixer",
            "url" => "https://cdn.simpleicons.org/autoprefixer?viewbox=auto"
            ],
            [
            "title" => "AutoZone",
            "slug" => "autozone",
            "url" => "https://cdn.simpleicons.org/autozone?viewbox=auto"
            ],
            [
            "title" => "avajs",
            "slug" => "avajs",
            "url" => "https://cdn.simpleicons.org/avajs?viewbox=auto"
            ],
            [
            "title" => "Avast",
            "slug" => "avast",
            "url" => "https://cdn.simpleicons.org/avast?viewbox=auto"
            ],
            [
            "title" => "avianca",
            "slug" => "avianca",
            "url" => "https://cdn.simpleicons.org/avianca?viewbox=auto"
            ],
            [
            "title" => "Avira",
            "slug" => "avira",
            "url" => "https://cdn.simpleicons.org/avira?viewbox=auto"
            ],
            [
            "title" => "Awesome Lists",
            "slug" => "awesomelists",
            "url" => "https://cdn.simpleicons.org/awesomelists?viewbox=auto"
            ],
            [
            "title" => "awesomeWM",
            "slug" => "awesomewm",
            "url" => "https://cdn.simpleicons.org/awesomewm?viewbox=auto"
            ],
            [
            "title" => "AWS Amplify",
            "slug" => "awsamplify",
            "url" => "https://cdn.simpleicons.org/awsamplify?viewbox=auto"
            ],
            [
            "title" => "AWS Elastic Load Balancing",
            "slug" => "awselasticloadbalancing",
            "url" => "https://cdn.simpleicons.org/awselasticloadbalancing?viewbox=auto"
            ],
            [
            "title" => "AWS Fargate",
            "slug" => "awsfargate",
            "url" => "https://cdn.simpleicons.org/awsfargate?viewbox=auto"
            ],
            [
            "title" => "AWS Lambda",
            "slug" => "awslambda",
            "url" => "https://cdn.simpleicons.org/awslambda?viewbox=auto"
            ],
            [
            "title" => "AWS Organizations",
            "slug" => "awsorganizations",
            "url" => "https://cdn.simpleicons.org/awsorganizations?viewbox=auto"
            ],
            [
            "title" => "AWS Secrets Manager",
            "slug" => "awssecretsmanager",
            "url" => "https://cdn.simpleicons.org/awssecretsmanager?viewbox=auto"
            ],
            [
            "title" => "Awwwards",
            "slug" => "awwwards",
            "url" => "https://cdn.simpleicons.org/awwwards?viewbox=auto"
            ],
            [
            "title" => "Axios",
            "slug" => "axios",
            "url" => "https://cdn.simpleicons.org/axios?viewbox=auto"
            ],
            [
            "title" => "Azure Artifacts",
            "slug" => "azureartifacts",
            "url" => "https://cdn.simpleicons.org/azureartifacts?viewbox=auto"
            ],
            [
            "title" => "Azure Data Explorer",
            "slug" => "azuredataexplorer",
            "url" => "https://cdn.simpleicons.org/azuredataexplorer?viewbox=auto"
            ],
            [
            "title" => "Azure DevOps",
            "slug" => "azuredevops",
            "url" => "https://cdn.simpleicons.org/azuredevops?viewbox=auto"
            ],
            [
            "title" => "Azure Functions",
            "slug" => "azurefunctions",
            "url" => "https://cdn.simpleicons.org/azurefunctions?viewbox=auto"
            ],
            [
            "title" => "Azure Pipelines",
            "slug" => "azurepipelines",
            "url" => "https://cdn.simpleicons.org/azurepipelines?viewbox=auto"
            ],
            [
            "title" => "B&R Automation",
            "slug" => "bandrautomation",
            "url" => "https://cdn.simpleicons.org/bandrautomation?viewbox=auto"
            ],
            [
            "title" => "Babel",
            "slug" => "babel",
            "url" => "https://cdn.simpleicons.org/babel?viewbox=auto"
            ],
            [
            "title" => "Babelio",
            "slug" => "babelio",
            "url" => "https://cdn.simpleicons.org/babelio?viewbox=auto"
            ],
            [
            "title" => "Babylon.js",
            "slug" => "babylondotjs",
            "url" => "https://cdn.simpleicons.org/babylondotjs?viewbox=auto"
            ],
            [
            "title" => "Backblaze",
            "slug" => "backblaze",
            "url" => "https://cdn.simpleicons.org/backblaze?viewbox=auto"
            ],
            [
            "title" => "Backbone.js",
            "slug" => "backbonedotjs",
            "url" => "https://cdn.simpleicons.org/backbonedotjs?viewbox=auto"
            ],
            [
            "title" => "Backendless",
            "slug" => "backendless",
            "url" => "https://cdn.simpleicons.org/backendless?viewbox=auto"
            ],
            [
            "title" => "Backstage",
            "slug" => "backstage",
            "url" => "https://cdn.simpleicons.org/backstage?viewbox=auto"
            ],
            [
            "title" => "Badoo",
            "slug" => "badoo",
            "url" => "https://cdn.simpleicons.org/badoo?viewbox=auto"
            ],
            [
            "title" => "Baidu",
            "slug" => "baidu",
            "url" => "https://cdn.simpleicons.org/baidu?viewbox=auto"
            ],
            [
            "title" => "Bakaláři",
            "slug" => "bakalari",
            "url" => "https://cdn.simpleicons.org/bakalari?viewbox=auto"
            ],
            [
            "title" => "Bamboo",
            "slug" => "bamboo",
            "url" => "https://cdn.simpleicons.org/bamboo?viewbox=auto"
            ],
            [
            "title" => "Bandcamp",
            "slug" => "bandcamp",
            "url" => "https://cdn.simpleicons.org/bandcamp?viewbox=auto"
            ],
            [
            "title" => "BandLab",
            "slug" => "bandlab",
            "url" => "https://cdn.simpleicons.org/bandlab?viewbox=auto"
            ],
            [
            "title" => "Bandsintown",
            "slug" => "bandsintown",
            "url" => "https://cdn.simpleicons.org/bandsintown?viewbox=auto"
            ],
            [
            "title" => "Bank of America",
            "slug" => "bankofamerica",
            "url" => "https://cdn.simpleicons.org/bankofamerica?viewbox=auto"
            ],
            [
            "title" => "Barclays",
            "slug" => "barclays",
            "url" => "https://cdn.simpleicons.org/barclays?viewbox=auto"
            ],
            [
            "title" => "Baremetrics",
            "slug" => "baremetrics",
            "url" => "https://cdn.simpleicons.org/baremetrics?viewbox=auto"
            ],
            [
            "title" => "Barmenia",
            "slug" => "barmenia",
            "url" => "https://cdn.simpleicons.org/barmenia?viewbox=auto"
            ],
            [
            "title" => "Basecamp",
            "slug" => "basecamp",
            "url" => "https://cdn.simpleicons.org/basecamp?viewbox=auto"
            ],
            [
            "title" => "Basic Attention Token",
            "slug" => "basicattentiontoken",
            "url" => "https://cdn.simpleicons.org/basicattentiontoken?viewbox=auto"
            ],
            [
            "title" => "Bastyon",
            "slug" => "bastyon",
            "url" => "https://cdn.simpleicons.org/bastyon?viewbox=auto"
            ],
            [
            "title" => "bat",
            "slug" => "bat",
            "url" => "https://cdn.simpleicons.org/bat?viewbox=auto"
            ],
            [
            "title" => "Bata",
            "slug" => "bata",
            "url" => "https://cdn.simpleicons.org/bata?viewbox=auto"
            ],
            [
            "title" => "Battle.net",
            "slug" => "battledotnet",
            "url" => "https://cdn.simpleicons.org/battledotnet?viewbox=auto"
            ],
            [
            "title" => "Bazel",
            "slug" => "bazel",
            "url" => "https://cdn.simpleicons.org/bazel?viewbox=auto"
            ],
            [
            "title" => "Beatport",
            "slug" => "beatport",
            "url" => "https://cdn.simpleicons.org/beatport?viewbox=auto"
            ],
            [
            "title" => "Beats",
            "slug" => "beats",
            "url" => "https://cdn.simpleicons.org/beats?viewbox=auto"
            ],
            [
            "title" => "Beats by Dre",
            "slug" => "beatsbydre",
            "url" => "https://cdn.simpleicons.org/beatsbydre?viewbox=auto"
            ],
            [
            "title" => "BeatStars",
            "slug" => "beatstars",
            "url" => "https://cdn.simpleicons.org/beatstars?viewbox=auto"
            ],
            [
            "title" => "Behance",
            "slug" => "behance",
            "url" => "https://cdn.simpleicons.org/behance?viewbox=auto"
            ],
            [
            "title" => "Beijing Subway",
            "slug" => "beijingsubway",
            "url" => "https://cdn.simpleicons.org/beijingsubway?viewbox=auto"
            ],
            [
            "title" => "BEM",
            "slug" => "bem",
            "url" => "https://cdn.simpleicons.org/bem?viewbox=auto"
            ],
            [
            "title" => "Bentley",
            "slug" => "bentley",
            "url" => "https://cdn.simpleicons.org/bentley?viewbox=auto"
            ],
            [
            "title" => "Bento",
            "slug" => "bento",
            "url" => "https://cdn.simpleicons.org/bento?viewbox=auto"
            ],
            [
            "title" => "BentoBox",
            "slug" => "bentobox",
            "url" => "https://cdn.simpleicons.org/bentobox?viewbox=auto"
            ],
            [
            "title" => "BentoML",
            "slug" => "bentoml",
            "url" => "https://cdn.simpleicons.org/bentoml?viewbox=auto"
            ],
            [
            "title" => "BeReal",
            "slug" => "bereal",
            "url" => "https://cdn.simpleicons.org/bereal?viewbox=auto"
            ],
            [
            "title" => "Betfair",
            "slug" => "betfair",
            "url" => "https://cdn.simpleicons.org/betfair?viewbox=auto"
            ],
            [
            "title" => "Better Stack",
            "slug" => "betterstack",
            "url" => "https://cdn.simpleicons.org/betterstack?viewbox=auto"
            ],
            [
            "title" => "Bevy",
            "slug" => "bevy",
            "url" => "https://cdn.simpleicons.org/bevy?viewbox=auto"
            ],
            [
            "title" => "Big Cartel",
            "slug" => "bigcartel",
            "url" => "https://cdn.simpleicons.org/bigcartel?viewbox=auto"
            ],
            [
            "title" => "bigbasket",
            "slug" => "bigbasket",
            "url" => "https://cdn.simpleicons.org/bigbasket?viewbox=auto"
            ],
            [
            "title" => "BigBlueButton",
            "slug" => "bigbluebutton",
            "url" => "https://cdn.simpleicons.org/bigbluebutton?viewbox=auto"
            ],
            [
            "title" => "BigCommerce",
            "slug" => "bigcommerce",
            "url" => "https://cdn.simpleicons.org/bigcommerce?viewbox=auto"
            ],
            [
            "title" => "Bilibili",
            "slug" => "bilibili",
            "url" => "https://cdn.simpleicons.org/bilibili?viewbox=auto"
            ],
            [
            "title" => "Billboard",
            "slug" => "billboard",
            "url" => "https://cdn.simpleicons.org/billboard?viewbox=auto"
            ],
            [
            "title" => "BIM",
            "slug" => "bim",
            "url" => "https://cdn.simpleicons.org/bim?viewbox=auto"
            ],
            [
            "title" => "Binance",
            "slug" => "binance",
            "url" => "https://cdn.simpleicons.org/binance?viewbox=auto"
            ],
            [
            "title" => "Bio Link",
            "slug" => "biolink",
            "url" => "https://cdn.simpleicons.org/biolink?viewbox=auto"
            ],
            [
            "title" => "Biome",
            "slug" => "biome",
            "url" => "https://cdn.simpleicons.org/biome?viewbox=auto"
            ],
            [
            "title" => "BisectHosting",
            "slug" => "bisecthosting",
            "url" => "https://cdn.simpleicons.org/bisecthosting?viewbox=auto"
            ],
            [
            "title" => "Bit",
            "slug" => "bit",
            "url" => "https://cdn.simpleicons.org/bit?viewbox=auto"
            ],
            [
            "title" => "Bitbucket",
            "slug" => "bitbucket",
            "url" => "https://cdn.simpleicons.org/bitbucket?viewbox=auto"
            ],
            [
            "title" => "Bitcoin",
            "slug" => "bitcoin",
            "url" => "https://cdn.simpleicons.org/bitcoin?viewbox=auto"
            ],
            [
            "title" => "Bitcoin Cash",
            "slug" => "bitcoincash",
            "url" => "https://cdn.simpleicons.org/bitcoincash?viewbox=auto"
            ],
            [
            "title" => "Bitcoin SV",
            "slug" => "bitcoinsv",
            "url" => "https://cdn.simpleicons.org/bitcoinsv?viewbox=auto"
            ],
            [
            "title" => "BitComet",
            "slug" => "bitcomet",
            "url" => "https://cdn.simpleicons.org/bitcomet?viewbox=auto"
            ],
            [
            "title" => "Bitdefender",
            "slug" => "bitdefender",
            "url" => "https://cdn.simpleicons.org/bitdefender?viewbox=auto"
            ],
            [
            "title" => "Bitly",
            "slug" => "bitly",
            "url" => "https://cdn.simpleicons.org/bitly?viewbox=auto"
            ],
            [
            "title" => "Bitrise",
            "slug" => "bitrise",
            "url" => "https://cdn.simpleicons.org/bitrise?viewbox=auto"
            ],
            [
            "title" => "BitTorrent",
            "slug" => "bittorrent",
            "url" => "https://cdn.simpleicons.org/bittorrent?viewbox=auto"
            ],
            [
            "title" => "Bitwarden",
            "slug" => "bitwarden",
            "url" => "https://cdn.simpleicons.org/bitwarden?viewbox=auto"
            ],
            [
            "title" => "Bitwig",
            "slug" => "bitwig",
            "url" => "https://cdn.simpleicons.org/bitwig?viewbox=auto"
            ],
            [
            "title" => "Blackberry",
            "slug" => "blackberry",
            "url" => "https://cdn.simpleicons.org/blackberry?viewbox=auto"
            ],
            [
            "title" => "Blackmagic Design",
            "slug" => "blackmagicdesign",
            "url" => "https://cdn.simpleicons.org/blackmagicdesign?viewbox=auto"
            ],
            [
            "title" => "Blazemeter",
            "slug" => "blazemeter",
            "url" => "https://cdn.simpleicons.org/blazemeter?viewbox=auto"
            ],
            [
            "title" => "Blazor",
            "slug" => "blazor",
            "url" => "https://cdn.simpleicons.org/blazor?viewbox=auto"
            ],
            [
            "title" => "Blender",
            "slug" => "blender",
            "url" => "https://cdn.simpleicons.org/blender?viewbox=auto"
            ],
            [
            "title" => "Blockbench",
            "slug" => "blockbench",
            "url" => "https://cdn.simpleicons.org/blockbench?viewbox=auto"
            ],
            [
            "title" => "Blockchain.com",
            "slug" => "blockchaindotcom",
            "url" => "https://cdn.simpleicons.org/blockchaindotcom?viewbox=auto"
            ],
            [
            "title" => "Blogger",
            "slug" => "blogger",
            "url" => "https://cdn.simpleicons.org/blogger?viewbox=auto"
            ],
            [
            "title" => "Bloglovin",
            "slug" => "bloglovin",
            "url" => "https://cdn.simpleicons.org/bloglovin?viewbox=auto"
            ],
            [
            "title" => "Blueprint",
            "slug" => "blueprint",
            "url" => "https://cdn.simpleicons.org/blueprint?viewbox=auto"
            ],
            [
            "title" => "Bluesky",
            "slug" => "bluesky",
            "url" => "https://cdn.simpleicons.org/bluesky?viewbox=auto"
            ],
            [
            "title" => "Bluesound",
            "slug" => "bluesound",
            "url" => "https://cdn.simpleicons.org/bluesound?viewbox=auto"
            ],
            [
            "title" => "Bluetooth",
            "slug" => "bluetooth",
            "url" => "https://cdn.simpleicons.org/bluetooth?viewbox=auto"
            ],
            [
            "title" => "BMC Software",
            "slug" => "bmcsoftware",
            "url" => "https://cdn.simpleicons.org/bmcsoftware?viewbox=auto"
            ],
            [
            "title" => "BMW",
            "slug" => "bmw",
            "url" => "https://cdn.simpleicons.org/bmw?viewbox=auto"
            ],
            [
            "title" => "BNB Chain",
            "slug" => "bnbchain",
            "url" => "https://cdn.simpleicons.org/bnbchain?viewbox=auto"
            ],
            [
            "title" => "BoardGameGeek",
            "slug" => "boardgamegeek",
            "url" => "https://cdn.simpleicons.org/boardgamegeek?viewbox=auto"
            ],
            [
            "title" => "boAt",
            "slug" => "boat",
            "url" => "https://cdn.simpleicons.org/boat?viewbox=auto"
            ],
            [
            "title" => "Boehringer Ingelheim",
            "slug" => "boehringeringelheim",
            "url" => "https://cdn.simpleicons.org/boehringeringelheim?viewbox=auto"
            ],
            [
            "title" => "Boeing",
            "slug" => "boeing",
            "url" => "https://cdn.simpleicons.org/boeing?viewbox=auto"
            ],
            [
            "title" => "Bombardier",
            "slug" => "bombardier",
            "url" => "https://cdn.simpleicons.org/bombardier?viewbox=auto"
            ],
            [
            "title" => "Bookalope",
            "slug" => "bookalope",
            "url" => "https://cdn.simpleicons.org/bookalope?viewbox=auto"
            ],
            [
            "title" => "BookBub",
            "slug" => "bookbub",
            "url" => "https://cdn.simpleicons.org/bookbub?viewbox=auto"
            ],
            [
            "title" => "Bookmeter",
            "slug" => "bookmeter",
            "url" => "https://cdn.simpleicons.org/bookmeter?viewbox=auto"
            ],
            [
            "title" => "BookMyShow",
            "slug" => "bookmyshow",
            "url" => "https://cdn.simpleicons.org/bookmyshow?viewbox=auto"
            ],
            [
            "title" => "BookStack",
            "slug" => "bookstack",
            "url" => "https://cdn.simpleicons.org/bookstack?viewbox=auto"
            ],
            [
            "title" => "Boost",
            "slug" => "boost",
            "url" => "https://cdn.simpleicons.org/boost?viewbox=auto"
            ],
            [
            "title" => "Boosty",
            "slug" => "boosty",
            "url" => "https://cdn.simpleicons.org/boosty?viewbox=auto"
            ],
            [
            "title" => "Boots",
            "slug" => "boots",
            "url" => "https://cdn.simpleicons.org/boots?viewbox=auto"
            ],
            [
            "title" => "Bootstrap",
            "slug" => "bootstrap",
            "url" => "https://cdn.simpleicons.org/bootstrap?viewbox=auto"
            ],
            [
            "title" => "BorgBackup",
            "slug" => "borgbackup",
            "url" => "https://cdn.simpleicons.org/borgbackup?viewbox=auto"
            ],
            [
            "title" => "Bosch",
            "slug" => "bosch",
            "url" => "https://cdn.simpleicons.org/bosch?viewbox=auto"
            ],
            [
            "title" => "Bose",
            "slug" => "bose",
            "url" => "https://cdn.simpleicons.org/bose?viewbox=auto"
            ],
            [
            "title" => "Botble CMS",
            "slug" => "botblecms",
            "url" => "https://cdn.simpleicons.org/botblecms?viewbox=auto"
            ],
            [
            "title" => "boulanger",
            "slug" => "boulanger",
            "url" => "https://cdn.simpleicons.org/boulanger?viewbox=auto"
            ],
            [
            "title" => "Bower",
            "slug" => "bower",
            "url" => "https://cdn.simpleicons.org/bower?viewbox=auto"
            ],
            [
            "title" => "Box",
            "slug" => "box",
            "url" => "https://cdn.simpleicons.org/box?viewbox=auto"
            ],
            [
            "title" => "Boxy SVG",
            "slug" => "boxysvg",
            "url" => "https://cdn.simpleicons.org/boxysvg?viewbox=auto"
            ],
            [
            "title" => "Braintree",
            "slug" => "braintree",
            "url" => "https://cdn.simpleicons.org/braintree?viewbox=auto"
            ],
            [
            "title" => "Brandfolder",
            "slug" => "brandfolder",
            "url" => "https://cdn.simpleicons.org/brandfolder?viewbox=auto"
            ],
            [
            "title" => "Brave",
            "slug" => "brave",
            "url" => "https://cdn.simpleicons.org/brave?viewbox=auto"
            ],
            [
            "title" => "Breaker",
            "slug" => "breaker",
            "url" => "https://cdn.simpleicons.org/breaker?viewbox=auto"
            ],
            [
            "title" => "Brenntag",
            "slug" => "brenntag",
            "url" => "https://cdn.simpleicons.org/brenntag?viewbox=auto"
            ],
            [
            "title" => "Brevo",
            "slug" => "brevo",
            "url" => "https://cdn.simpleicons.org/brevo?viewbox=auto"
            ],
            [
            "title" => "Brex",
            "slug" => "brex",
            "url" => "https://cdn.simpleicons.org/brex?viewbox=auto"
            ],
            [
            "title" => "Bricks",
            "slug" => "bricks",
            "url" => "https://cdn.simpleicons.org/bricks?viewbox=auto"
            ],
            [
            "title" => "British Airways",
            "slug" => "britishairways",
            "url" => "https://cdn.simpleicons.org/britishairways?viewbox=auto"
            ],
            [
            "title" => "Broadcom",
            "slug" => "broadcom",
            "url" => "https://cdn.simpleicons.org/broadcom?viewbox=auto"
            ],
            [
            "title" => "BSD",
            "slug" => "bsd",
            "url" => "https://cdn.simpleicons.org/bsd?viewbox=auto"
            ],
            [
            "title" => "bspwm",
            "slug" => "bspwm",
            "url" => "https://cdn.simpleicons.org/bspwm?viewbox=auto"
            ],
            [
            "title" => "BT",
            "slug" => "bt",
            "url" => "https://cdn.simpleicons.org/bt?viewbox=auto"
            ],
            [
            "title" => "Buddy",
            "slug" => "buddy",
            "url" => "https://cdn.simpleicons.org/buddy?viewbox=auto"
            ],
            [
            "title" => "Budibase",
            "slug" => "budibase",
            "url" => "https://cdn.simpleicons.org/budibase?viewbox=auto"
            ],
            [
            "title" => "Buefy",
            "slug" => "buefy",
            "url" => "https://cdn.simpleicons.org/buefy?viewbox=auto"
            ],
            [
            "title" => "Buffer",
            "slug" => "buffer",
            "url" => "https://cdn.simpleicons.org/buffer?viewbox=auto"
            ],
            [
            "title" => "Bugatti",
            "slug" => "bugatti",
            "url" => "https://cdn.simpleicons.org/bugatti?viewbox=auto"
            ],
            [
            "title" => "Bugcrowd",
            "slug" => "bugcrowd",
            "url" => "https://cdn.simpleicons.org/bugcrowd?viewbox=auto"
            ],
            [
            "title" => "Bugsnag",
            "slug" => "bugsnag",
            "url" => "https://cdn.simpleicons.org/bugsnag?viewbox=auto"
            ],
            [
            "title" => "Buhl",
            "slug" => "buhl",
            "url" => "https://cdn.simpleicons.org/buhl?viewbox=auto"
            ],
            [
            "title" => "Buildkite",
            "slug" => "buildkite",
            "url" => "https://cdn.simpleicons.org/buildkite?viewbox=auto"
            ],
            [
            "title" => "Bukalapak",
            "slug" => "bukalapak",
            "url" => "https://cdn.simpleicons.org/bukalapak?viewbox=auto"
            ],
            [
            "title" => "Bulma",
            "slug" => "bulma",
            "url" => "https://cdn.simpleicons.org/bulma?viewbox=auto"
            ],
            [
            "title" => "Bun",
            "slug" => "bun",
            "url" => "https://cdn.simpleicons.org/bun?viewbox=auto"
            ],
            [
            "title" => "Bungie",
            "slug" => "bungie",
            "url" => "https://cdn.simpleicons.org/bungie?viewbox=auto"
            ],
            [
            "title" => "bunq",
            "slug" => "bunq",
            "url" => "https://cdn.simpleicons.org/bunq?viewbox=auto"
            ],
            [
            "title" => "Burger King",
            "slug" => "burgerking",
            "url" => "https://cdn.simpleicons.org/burgerking?viewbox=auto"
            ],
            [
            "title" => "Burp Suite",
            "slug" => "burpsuite",
            "url" => "https://cdn.simpleicons.org/burpsuite?viewbox=auto"
            ],
            [
            "title" => "Burton",
            "slug" => "burton",
            "url" => "https://cdn.simpleicons.org/burton?viewbox=auto"
            ],
            [
            "title" => "Buy Me A Coffee",
            "slug" => "buymeacoffee",
            "url" => "https://cdn.simpleicons.org/buymeacoffee?viewbox=auto"
            ],
            [
            "title" => "BuySellAds",
            "slug" => "buysellads",
            "url" => "https://cdn.simpleicons.org/buysellads?viewbox=auto"
            ],
            [
            "title" => "BuzzFeed",
            "slug" => "buzzfeed",
            "url" => "https://cdn.simpleicons.org/buzzfeed?viewbox=auto"
            ],
            [
            "title" => "BVG",
            "slug" => "bvg",
            "url" => "https://cdn.simpleicons.org/bvg?viewbox=auto"
            ],
            [
            "title" => "Byju's",
            "slug" => "byjus",
            "url" => "https://cdn.simpleicons.org/byjus?viewbox=auto"
            ],
            [
            "title" => "ByteDance",
            "slug" => "bytedance",
            "url" => "https://cdn.simpleicons.org/bytedance?viewbox=auto"
            ],
            [
            "title" => "C",
            "slug" => "c",
            "url" => "https://cdn.simpleicons.org/c?viewbox=auto"
            ],
            [
            "title" => "C#",
            "slug" => "c",
            "url" => "https://cdn.simpleicons.org/c?viewbox=auto"
            ],
            [
            "title" => "C++",
            "slug" => "cplusplus",
            "url" => "https://cdn.simpleicons.org/cplusplus?viewbox=auto"
            ],
            [
            "title" => "C++ Builder",
            "slug" => "cplusplusbuilder",
            "url" => "https://cdn.simpleicons.org/cplusplusbuilder?viewbox=auto"
            ],
            [
            "title" => "Cachet",
            "slug" => "cachet",
            "url" => "https://cdn.simpleicons.org/cachet?viewbox=auto"
            ],
            [
            "title" => "Caddy",
            "slug" => "caddy",
            "url" => "https://cdn.simpleicons.org/caddy?viewbox=auto"
            ],
            [
            "title" => "Cadillac",
            "slug" => "cadillac",
            "url" => "https://cdn.simpleicons.org/cadillac?viewbox=auto"
            ],
            [
            "title" => "CafePress",
            "slug" => "cafepress",
            "url" => "https://cdn.simpleicons.org/cafepress?viewbox=auto"
            ],
            [
            "title" => "Caffeine",
            "slug" => "caffeine",
            "url" => "https://cdn.simpleicons.org/caffeine?viewbox=auto"
            ],
            [
            "title" => "Cairo Graphics",
            "slug" => "cairographics",
            "url" => "https://cdn.simpleicons.org/cairographics?viewbox=auto"
            ],
            [
            "title" => "Cairo Metro",
            "slug" => "cairometro",
            "url" => "https://cdn.simpleicons.org/cairometro?viewbox=auto"
            ],
            [
            "title" => "CakePHP",
            "slug" => "cakephp",
            "url" => "https://cdn.simpleicons.org/cakephp?viewbox=auto"
            ],
            [
            "title" => "Cal.com",
            "slug" => "caldotcom",
            "url" => "https://cdn.simpleicons.org/caldotcom?viewbox=auto"
            ],
            [
            "title" => "Calendly",
            "slug" => "calendly",
            "url" => "https://cdn.simpleicons.org/calendly?viewbox=auto"
            ],
            [
            "title" => "Calibre-Web",
            "slug" => "calibreweb",
            "url" => "https://cdn.simpleicons.org/calibreweb?viewbox=auto"
            ],
            [
            "title" => "Campaign Monitor",
            "slug" => "campaignmonitor",
            "url" => "https://cdn.simpleicons.org/campaignmonitor?viewbox=auto"
            ],
            [
            "title" => "Camunda",
            "slug" => "camunda",
            "url" => "https://cdn.simpleicons.org/camunda?viewbox=auto"
            ],
            [
            "title" => "Canonical",
            "slug" => "canonical",
            "url" => "https://cdn.simpleicons.org/canonical?viewbox=auto"
            ],
            [
            "title" => "Canva",
            "slug" => "canva",
            "url" => "https://cdn.simpleicons.org/canva?viewbox=auto"
            ],
            [
            "title" => "Canvas",
            "slug" => "canvas",
            "url" => "https://cdn.simpleicons.org/canvas?viewbox=auto"
            ],
            [
            "title" => "Capacitor",
            "slug" => "capacitor",
            "url" => "https://cdn.simpleicons.org/capacitor?viewbox=auto"
            ],
            [
            "title" => "Car Throttle",
            "slug" => "carthrottle",
            "url" => "https://cdn.simpleicons.org/carthrottle?viewbox=auto"
            ],
            [
            "title" => "Cardano",
            "slug" => "cardano",
            "url" => "https://cdn.simpleicons.org/cardano?viewbox=auto"
            ],
            [
            "title" => "Carlsberg Group",
            "slug" => "carlsberggroup",
            "url" => "https://cdn.simpleicons.org/carlsberggroup?viewbox=auto"
            ],
            [
            "title" => "Carrd",
            "slug" => "carrd",
            "url" => "https://cdn.simpleicons.org/carrd?viewbox=auto"
            ],
            [
            "title" => "Carrefour",
            "slug" => "carrefour",
            "url" => "https://cdn.simpleicons.org/carrefour?viewbox=auto"
            ],
            [
            "title" => "Carto",
            "slug" => "carto",
            "url" => "https://cdn.simpleicons.org/carto?viewbox=auto"
            ],
            [
            "title" => "Cash App",
            "slug" => "cashapp",
            "url" => "https://cdn.simpleicons.org/cashapp?viewbox=auto"
            ],
            [
            "title" => "Castbox",
            "slug" => "castbox",
            "url" => "https://cdn.simpleicons.org/castbox?viewbox=auto"
            ],
            [
            "title" => "Castorama",
            "slug" => "castorama",
            "url" => "https://cdn.simpleicons.org/castorama?viewbox=auto"
            ],
            [
            "title" => "Castro",
            "slug" => "castro",
            "url" => "https://cdn.simpleicons.org/castro?viewbox=auto"
            ],
            [
            "title" => "Caterpillar",
            "slug" => "caterpillar",
            "url" => "https://cdn.simpleicons.org/caterpillar?viewbox=auto"
            ],
            [
            "title" => "CBC",
            "slug" => "cbc",
            "url" => "https://cdn.simpleicons.org/cbc?viewbox=auto"
            ],
            [
            "title" => "CBS",
            "slug" => "cbs",
            "url" => "https://cdn.simpleicons.org/cbs?viewbox=auto"
            ],
            [
            "title" => "CCleaner",
            "slug" => "ccleaner",
            "url" => "https://cdn.simpleicons.org/ccleaner?viewbox=auto"
            ],
            [
            "title" => "CD Projekt",
            "slug" => "cdprojekt",
            "url" => "https://cdn.simpleicons.org/cdprojekt?viewbox=auto"
            ],
            [
            "title" => "Celery",
            "slug" => "celery",
            "url" => "https://cdn.simpleicons.org/celery?viewbox=auto"
            ],
            [
            "title" => "Celestron",
            "slug" => "celestron",
            "url" => "https://cdn.simpleicons.org/celestron?viewbox=auto"
            ],
            [
            "title" => "CentOS",
            "slug" => "centos",
            "url" => "https://cdn.simpleicons.org/centos?viewbox=auto"
            ],
            [
            "title" => "Ceph",
            "slug" => "ceph",
            "url" => "https://cdn.simpleicons.org/ceph?viewbox=auto"
            ],
            [
            "title" => "Cesium",
            "slug" => "cesium",
            "url" => "https://cdn.simpleicons.org/cesium?viewbox=auto"
            ],
            [
            "title" => "Chai",
            "slug" => "chai",
            "url" => "https://cdn.simpleicons.org/chai?viewbox=auto"
            ],
            [
            "title" => "Chainguard",
            "slug" => "chainguard",
            "url" => "https://cdn.simpleicons.org/chainguard?viewbox=auto"
            ],
            [
            "title" => "Chainlink",
            "slug" => "chainlink",
            "url" => "https://cdn.simpleicons.org/chainlink?viewbox=auto"
            ],
            [
            "title" => "Chakra UI",
            "slug" => "chakraui",
            "url" => "https://cdn.simpleicons.org/chakraui?viewbox=auto"
            ],
            [
            "title" => "Channel 4",
            "slug" => "channel4",
            "url" => "https://cdn.simpleicons.org/channel4?viewbox=auto"
            ],
            [
            "title" => "Charles",
            "slug" => "charles",
            "url" => "https://cdn.simpleicons.org/charles?viewbox=auto"
            ],
            [
            "title" => "Chart.js",
            "slug" => "chartdotjs",
            "url" => "https://cdn.simpleicons.org/chartdotjs?viewbox=auto"
            ],
            [
            "title" => "ChartMogul",
            "slug" => "chartmogul",
            "url" => "https://cdn.simpleicons.org/chartmogul?viewbox=auto"
            ],
            [
            "title" => "Chase",
            "slug" => "chase",
            "url" => "https://cdn.simpleicons.org/chase?viewbox=auto"
            ],
            [
            "title" => "ChatBot",
            "slug" => "chatbot",
            "url" => "https://cdn.simpleicons.org/chatbot?viewbox=auto"
            ],
            [
            "title" => "Chatwoot",
            "slug" => "chatwoot",
            "url" => "https://cdn.simpleicons.org/chatwoot?viewbox=auto"
            ],
            [
            "title" => "CheckiO",
            "slug" => "checkio",
            "url" => "https://cdn.simpleicons.org/checkio?viewbox=auto"
            ],
            [
            "title" => "Checkmarx",
            "slug" => "checkmarx",
            "url" => "https://cdn.simpleicons.org/checkmarx?viewbox=auto"
            ],
            [
            "title" => "Checkmk",
            "slug" => "checkmk",
            "url" => "https://cdn.simpleicons.org/checkmk?viewbox=auto"
            ],
            [
            "title" => "Chedraui",
            "slug" => "chedraui",
            "url" => "https://cdn.simpleicons.org/chedraui?viewbox=auto"
            ],
            [
            "title" => "Cheerio",
            "slug" => "cheerio",
            "url" => "https://cdn.simpleicons.org/cheerio?viewbox=auto"
            ],
            [
            "title" => "Chef",
            "slug" => "chef",
            "url" => "https://cdn.simpleicons.org/chef?viewbox=auto"
            ],
            [
            "title" => "Chemex",
            "slug" => "chemex",
            "url" => "https://cdn.simpleicons.org/chemex?viewbox=auto"
            ],
            [
            "title" => "Chess.com",
            "slug" => "chessdotcom",
            "url" => "https://cdn.simpleicons.org/chessdotcom?viewbox=auto"
            ],
            [
            "title" => "Chevrolet",
            "slug" => "chevrolet",
            "url" => "https://cdn.simpleicons.org/chevrolet?viewbox=auto"
            ],
            [
            "title" => "Chia Network",
            "slug" => "chianetwork",
            "url" => "https://cdn.simpleicons.org/chianetwork?viewbox=auto"
            ],
            [
            "title" => "China Eastern Airlines",
            "slug" => "chinaeasternairlines",
            "url" => "https://cdn.simpleicons.org/chinaeasternairlines?viewbox=auto"
            ],
            [
            "title" => "China Southern Airlines",
            "slug" => "chinasouthernairlines",
            "url" => "https://cdn.simpleicons.org/chinasouthernairlines?viewbox=auto"
            ],
            [
            "title" => "Chocolatey",
            "slug" => "chocolatey",
            "url" => "https://cdn.simpleicons.org/chocolatey?viewbox=auto"
            ],
            [
            "title" => "Chromatic",
            "slug" => "chromatic",
            "url" => "https://cdn.simpleicons.org/chromatic?viewbox=auto"
            ],
            [
            "title" => "Chromecast",
            "slug" => "chromecast",
            "url" => "https://cdn.simpleicons.org/chromecast?viewbox=auto"
            ],
            [
            "title" => "Chrysler",
            "slug" => "chrysler",
            "url" => "https://cdn.simpleicons.org/chrysler?viewbox=auto"
            ],
            [
            "title" => "Chupa Chups",
            "slug" => "chupachups",
            "url" => "https://cdn.simpleicons.org/chupachups?viewbox=auto"
            ],
            [
            "title" => "Cilium",
            "slug" => "cilium",
            "url" => "https://cdn.simpleicons.org/cilium?viewbox=auto"
            ],
            [
            "title" => "Cinema 4D",
            "slug" => "cinema4d",
            "url" => "https://cdn.simpleicons.org/cinema4d?viewbox=auto"
            ],
            [
            "title" => "Circle",
            "slug" => "circle",
            "url" => "https://cdn.simpleicons.org/circle?viewbox=auto"
            ],
            [
            "title" => "CircleCI",
            "slug" => "circleci",
            "url" => "https://cdn.simpleicons.org/circleci?viewbox=auto"
            ],
            [
            "title" => "CircuitVerse",
            "slug" => "circuitverse",
            "url" => "https://cdn.simpleicons.org/circuitverse?viewbox=auto"
            ],
            [
            "title" => "Cirrus CI",
            "slug" => "cirrusci",
            "url" => "https://cdn.simpleicons.org/cirrusci?viewbox=auto"
            ],
            [
            "title" => "Cisco",
            "slug" => "cisco",
            "url" => "https://cdn.simpleicons.org/cisco?viewbox=auto"
            ],
            [
            "title" => "Citrix",
            "slug" => "citrix",
            "url" => "https://cdn.simpleicons.org/citrix?viewbox=auto"
            ],
            [
            "title" => "Citroën",
            "slug" => "citroen",
            "url" => "https://cdn.simpleicons.org/citroen?viewbox=auto"
            ],
            [
            "title" => "CiviCRM",
            "slug" => "civicrm",
            "url" => "https://cdn.simpleicons.org/civicrm?viewbox=auto"
            ],
            [
            "title" => "Civo",
            "slug" => "civo",
            "url" => "https://cdn.simpleicons.org/civo?viewbox=auto"
            ],
            [
            "title" => "CKEditor 4",
            "slug" => "ckeditor4",
            "url" => "https://cdn.simpleicons.org/ckeditor4?viewbox=auto"
            ],
            [
            "title" => "Clarifai",
            "slug" => "clarifai",
            "url" => "https://cdn.simpleicons.org/clarifai?viewbox=auto"
            ],
            [
            "title" => "Claris",
            "slug" => "claris",
            "url" => "https://cdn.simpleicons.org/claris?viewbox=auto"
            ],
            [
            "title" => "Clarivate",
            "slug" => "clarivate",
            "url" => "https://cdn.simpleicons.org/clarivate?viewbox=auto"
            ],
            [
            "title" => "Clerk",
            "slug" => "clerk",
            "url" => "https://cdn.simpleicons.org/clerk?viewbox=auto"
            ],
            [
            "title" => "Clever Cloud",
            "slug" => "clevercloud",
            "url" => "https://cdn.simpleicons.org/clevercloud?viewbox=auto"
            ],
            [
            "title" => "ClickHouse",
            "slug" => "clickhouse",
            "url" => "https://cdn.simpleicons.org/clickhouse?viewbox=auto"
            ],
            [
            "title" => "ClickUp",
            "slug" => "clickup",
            "url" => "https://cdn.simpleicons.org/clickup?viewbox=auto"
            ],
            [
            "title" => "CLion",
            "slug" => "clion",
            "url" => "https://cdn.simpleicons.org/clion?viewbox=auto"
            ],
            [
            "title" => "Cliqz",
            "slug" => "cliqz",
            "url" => "https://cdn.simpleicons.org/cliqz?viewbox=auto"
            ],
            [
            "title" => "Clockify",
            "slug" => "clockify",
            "url" => "https://cdn.simpleicons.org/clockify?viewbox=auto"
            ],
            [
            "title" => "Clojure",
            "slug" => "clojure",
            "url" => "https://cdn.simpleicons.org/clojure?viewbox=auto"
            ],
            [
            "title" => "Cloud 66",
            "slug" => "cloud66",
            "url" => "https://cdn.simpleicons.org/cloud66?viewbox=auto"
            ],
            [
            "title" => "Cloud Foundry",
            "slug" => "cloudfoundry",
            "url" => "https://cdn.simpleicons.org/cloudfoundry?viewbox=auto"
            ],
            [
            "title" => "CloudBees",
            "slug" => "cloudbees",
            "url" => "https://cdn.simpleicons.org/cloudbees?viewbox=auto"
            ],
            [
            "title" => "CloudCannon",
            "slug" => "cloudcannon",
            "url" => "https://cdn.simpleicons.org/cloudcannon?viewbox=auto"
            ],
            [
            "title" => "Cloudera",
            "slug" => "cloudera",
            "url" => "https://cdn.simpleicons.org/cloudera?viewbox=auto"
            ],
            [
            "title" => "Cloudflare",
            "slug" => "cloudflare",
            "url" => "https://cdn.simpleicons.org/cloudflare?viewbox=auto"
            ],
            [
            "title" => "Cloudflare Pages",
            "slug" => "cloudflarepages",
            "url" => "https://cdn.simpleicons.org/cloudflarepages?viewbox=auto"
            ],
            [
            "title" => "Cloudflare Workers",
            "slug" => "cloudflareworkers",
            "url" => "https://cdn.simpleicons.org/cloudflareworkers?viewbox=auto"
            ],
            [
            "title" => "Cloudinary",
            "slug" => "cloudinary",
            "url" => "https://cdn.simpleicons.org/cloudinary?viewbox=auto"
            ],
            [
            "title" => "Cloudron",
            "slug" => "cloudron",
            "url" => "https://cdn.simpleicons.org/cloudron?viewbox=auto"
            ],
            [
            "title" => "Cloudsmith",
            "slug" => "cloudsmith",
            "url" => "https://cdn.simpleicons.org/cloudsmith?viewbox=auto"
            ],
            [
            "title" => "Cloudways",
            "slug" => "cloudways",
            "url" => "https://cdn.simpleicons.org/cloudways?viewbox=auto"
            ],
            [
            "title" => "Clubforce",
            "slug" => "clubforce",
            "url" => "https://cdn.simpleicons.org/clubforce?viewbox=auto"
            ],
            [
            "title" => "Clubhouse",
            "slug" => "clubhouse",
            "url" => "https://cdn.simpleicons.org/clubhouse?viewbox=auto"
            ],
            [
            "title" => "Clyp",
            "slug" => "clyp",
            "url" => "https://cdn.simpleicons.org/clyp?viewbox=auto"
            ],
            [
            "title" => "CMake",
            "slug" => "cmake",
            "url" => "https://cdn.simpleicons.org/cmake?viewbox=auto"
            ],
            [
            "title" => "CNCF",
            "slug" => "cncf",
            "url" => "https://cdn.simpleicons.org/cncf?viewbox=auto"
            ],
            [
            "title" => "CNET",
            "slug" => "cnet",
            "url" => "https://cdn.simpleicons.org/cnet?viewbox=auto"
            ],
            [
            "title" => "CNN",
            "slug" => "cnn",
            "url" => "https://cdn.simpleicons.org/cnn?viewbox=auto"
            ],
            [
            "title" => "Co-op",
            "slug" => "coop",
            "url" => "https://cdn.simpleicons.org/coop?viewbox=auto"
            ],
            [
            "title" => "Coca Cola",
            "slug" => "cocacola",
            "url" => "https://cdn.simpleicons.org/cocacola?viewbox=auto"
            ],
            [
            "title" => "Cockpit",
            "slug" => "cockpit",
            "url" => "https://cdn.simpleicons.org/cockpit?viewbox=auto"
            ],
            [
            "title" => "Cockroach Labs",
            "slug" => "cockroachlabs",
            "url" => "https://cdn.simpleicons.org/cockroachlabs?viewbox=auto"
            ],
            [
            "title" => "CocoaPods",
            "slug" => "cocoapods",
            "url" => "https://cdn.simpleicons.org/cocoapods?viewbox=auto"
            ],
            [
            "title" => "Cocos",
            "slug" => "cocos",
            "url" => "https://cdn.simpleicons.org/cocos?viewbox=auto"
            ],
            [
            "title" => "Coda",
            "slug" => "coda",
            "url" => "https://cdn.simpleicons.org/coda?viewbox=auto"
            ],
            [
            "title" => "Codacy",
            "slug" => "codacy",
            "url" => "https://cdn.simpleicons.org/codacy?viewbox=auto"
            ],
            [
            "title" => "Code Climate",
            "slug" => "codeclimate",
            "url" => "https://cdn.simpleicons.org/codeclimate?viewbox=auto"
            ],
            [
            "title" => "Code::Blocks",
            "slug" => "codeblocks",
            "url" => "https://cdn.simpleicons.org/codeblocks?viewbox=auto"
            ],
            [
            "title" => "Codeberg",
            "slug" => "codeberg",
            "url" => "https://cdn.simpleicons.org/codeberg?viewbox=auto"
            ],
            [
            "title" => "Codecademy",
            "slug" => "codecademy",
            "url" => "https://cdn.simpleicons.org/codecademy?viewbox=auto"
            ],
            [
            "title" => "CodeceptJS",
            "slug" => "codeceptjs",
            "url" => "https://cdn.simpleicons.org/codeceptjs?viewbox=auto"
            ],
            [
            "title" => "CodeChef",
            "slug" => "codechef",
            "url" => "https://cdn.simpleicons.org/codechef?viewbox=auto"
            ],
            [
            "title" => "Codecov",
            "slug" => "codecov",
            "url" => "https://cdn.simpleicons.org/codecov?viewbox=auto"
            ],
            [
            "title" => "CodeFactor",
            "slug" => "codefactor",
            "url" => "https://cdn.simpleicons.org/codefactor?viewbox=auto"
            ],
            [
            "title" => "Codeforces",
            "slug" => "codeforces",
            "url" => "https://cdn.simpleicons.org/codeforces?viewbox=auto"
            ],
            [
            "title" => "Codefresh",
            "slug" => "codefresh",
            "url" => "https://cdn.simpleicons.org/codefresh?viewbox=auto"
            ],
            [
            "title" => "CodeIgniter",
            "slug" => "codeigniter",
            "url" => "https://cdn.simpleicons.org/codeigniter?viewbox=auto"
            ],
            [
            "title" => "Codeium",
            "slug" => "codeium",
            "url" => "https://cdn.simpleicons.org/codeium?viewbox=auto"
            ],
            [
            "title" => "Codemagic",
            "slug" => "codemagic",
            "url" => "https://cdn.simpleicons.org/codemagic?viewbox=auto"
            ],
            [
            "title" => "Codementor",
            "slug" => "codementor",
            "url" => "https://cdn.simpleicons.org/codementor?viewbox=auto"
            ],
            [
            "title" => "CodeMirror",
            "slug" => "codemirror",
            "url" => "https://cdn.simpleicons.org/codemirror?viewbox=auto"
            ],
            [
            "title" => "CodeNewbie",
            "slug" => "codenewbie",
            "url" => "https://cdn.simpleicons.org/codenewbie?viewbox=auto"
            ],
            [
            "title" => "CodePen",
            "slug" => "codepen",
            "url" => "https://cdn.simpleicons.org/codepen?viewbox=auto"
            ],
            [
            "title" => "CodeProject",
            "slug" => "codeproject",
            "url" => "https://cdn.simpleicons.org/codeproject?viewbox=auto"
            ],
            [
            "title" => "Coder",
            "slug" => "coder",
            "url" => "https://cdn.simpleicons.org/coder?viewbox=auto"
            ],
            [
            "title" => "CodersRank",
            "slug" => "codersrank",
            "url" => "https://cdn.simpleicons.org/codersrank?viewbox=auto"
            ],
            [
            "title" => "Coderwall",
            "slug" => "coderwall",
            "url" => "https://cdn.simpleicons.org/coderwall?viewbox=auto"
            ],
            [
            "title" => "CodeSandbox",
            "slug" => "codesandbox",
            "url" => "https://cdn.simpleicons.org/codesandbox?viewbox=auto"
            ],
            [
            "title" => "Codeship",
            "slug" => "codeship",
            "url" => "https://cdn.simpleicons.org/codeship?viewbox=auto"
            ],
            [
            "title" => "CodeSignal",
            "slug" => "codesignal",
            "url" => "https://cdn.simpleicons.org/codesignal?viewbox=auto"
            ],
            [
            "title" => "CodeStream",
            "slug" => "codestream",
            "url" => "https://cdn.simpleicons.org/codestream?viewbox=auto"
            ],
            [
            "title" => "Codewars",
            "slug" => "codewars",
            "url" => "https://cdn.simpleicons.org/codewars?viewbox=auto"
            ],
            [
            "title" => "Coding Ninjas",
            "slug" => "codingninjas",
            "url" => "https://cdn.simpleicons.org/codingninjas?viewbox=auto"
            ],
            [
            "title" => "CodinGame",
            "slug" => "codingame",
            "url" => "https://cdn.simpleicons.org/codingame?viewbox=auto"
            ],
            [
            "title" => "Codio",
            "slug" => "codio",
            "url" => "https://cdn.simpleicons.org/codio?viewbox=auto"
            ],
            [
            "title" => "CoffeeScript",
            "slug" => "coffeescript",
            "url" => "https://cdn.simpleicons.org/coffeescript?viewbox=auto"
            ],
            [
            "title" => "Coggle",
            "slug" => "coggle",
            "url" => "https://cdn.simpleicons.org/coggle?viewbox=auto"
            ],
            [
            "title" => "Cognizant",
            "slug" => "cognizant",
            "url" => "https://cdn.simpleicons.org/cognizant?viewbox=auto"
            ],
            [
            "title" => "Coil",
            "slug" => "coil",
            "url" => "https://cdn.simpleicons.org/coil?viewbox=auto"
            ],
            [
            "title" => "Coinbase",
            "slug" => "coinbase",
            "url" => "https://cdn.simpleicons.org/coinbase?viewbox=auto"
            ],
            [
            "title" => "CoinMarketCap",
            "slug" => "coinmarketcap",
            "url" => "https://cdn.simpleicons.org/coinmarketcap?viewbox=auto"
            ],
            [
            "title" => "ComicFury",
            "slug" => "comicfury",
            "url" => "https://cdn.simpleicons.org/comicfury?viewbox=auto"
            ],
            [
            "title" => "Commerzbank",
            "slug" => "commerzbank",
            "url" => "https://cdn.simpleicons.org/commerzbank?viewbox=auto"
            ],
            [
            "title" => "commitlint",
            "slug" => "commitlint",
            "url" => "https://cdn.simpleicons.org/commitlint?viewbox=auto"
            ],
            [
            "title" => "Commodore",
            "slug" => "commodore",
            "url" => "https://cdn.simpleicons.org/commodore?viewbox=auto"
            ],
            [
            "title" => "Common Workflow Language",
            "slug" => "commonworkflowlanguage",
            "url" => "https://cdn.simpleicons.org/commonworkflowlanguage?viewbox=auto"
            ],
            [
            "title" => "Compiler Explorer",
            "slug" => "compilerexplorer",
            "url" => "https://cdn.simpleicons.org/compilerexplorer?viewbox=auto"
            ],
            [
            "title" => "Composer",
            "slug" => "composer",
            "url" => "https://cdn.simpleicons.org/composer?viewbox=auto"
            ],
            [
            "title" => "CompTIA",
            "slug" => "comptia",
            "url" => "https://cdn.simpleicons.org/comptia?viewbox=auto"
            ],
            [
            "title" => "Comsol",
            "slug" => "comsol",
            "url" => "https://cdn.simpleicons.org/comsol?viewbox=auto"
            ],
            [
            "title" => "Conan",
            "slug" => "conan",
            "url" => "https://cdn.simpleicons.org/conan?viewbox=auto"
            ],
            [
            "title" => "Concourse",
            "slug" => "concourse",
            "url" => "https://cdn.simpleicons.org/concourse?viewbox=auto"
            ],
            [
            "title" => "Conda-Forge",
            "slug" => "condaforge",
            "url" => "https://cdn.simpleicons.org/condaforge?viewbox=auto"
            ],
            [
            "title" => "Conekta",
            "slug" => "conekta",
            "url" => "https://cdn.simpleicons.org/conekta?viewbox=auto"
            ],
            [
            "title" => "Confluence",
            "slug" => "confluence",
            "url" => "https://cdn.simpleicons.org/confluence?viewbox=auto"
            ],
            [
            "title" => "Construct 3",
            "slug" => "construct3",
            "url" => "https://cdn.simpleicons.org/construct3?viewbox=auto"
            ],
            [
            "title" => "Consul",
            "slug" => "consul",
            "url" => "https://cdn.simpleicons.org/consul?viewbox=auto"
            ],
            [
            "title" => "Contactless Payment",
            "slug" => "contactlesspayment",
            "url" => "https://cdn.simpleicons.org/contactlesspayment?viewbox=auto"
            ],
            [
            "title" => "containerd",
            "slug" => "containerd",
            "url" => "https://cdn.simpleicons.org/containerd?viewbox=auto"
            ],
            [
            "title" => "Contao",
            "slug" => "contao",
            "url" => "https://cdn.simpleicons.org/contao?viewbox=auto"
            ],
            [
            "title" => "Contentful",
            "slug" => "contentful",
            "url" => "https://cdn.simpleicons.org/contentful?viewbox=auto"
            ],
            [
            "title" => "Contentstack",
            "slug" => "contentstack",
            "url" => "https://cdn.simpleicons.org/contentstack?viewbox=auto"
            ],
            [
            "title" => "Contributor Covenant",
            "slug" => "contributorcovenant",
            "url" => "https://cdn.simpleicons.org/contributorcovenant?viewbox=auto"
            ],
            [
            "title" => "Conventional Commits",
            "slug" => "conventionalcommits",
            "url" => "https://cdn.simpleicons.org/conventionalcommits?viewbox=auto"
            ],
            [
            "title" => "Convertio",
            "slug" => "convertio",
            "url" => "https://cdn.simpleicons.org/convertio?viewbox=auto"
            ],
            [
            "title" => "Cookiecutter",
            "slug" => "cookiecutter",
            "url" => "https://cdn.simpleicons.org/cookiecutter?viewbox=auto"
            ],
            [
            "title" => "Cooler Master",
            "slug" => "coolermaster",
            "url" => "https://cdn.simpleicons.org/coolermaster?viewbox=auto"
            ],
            [
            "title" => "Copa Airlines",
            "slug" => "copaairlines",
            "url" => "https://cdn.simpleicons.org/copaairlines?viewbox=auto"
            ],
            [
            "title" => "Coppel",
            "slug" => "coppel",
            "url" => "https://cdn.simpleicons.org/coppel?viewbox=auto"
            ],
            [
            "title" => "Cora",
            "slug" => "cora",
            "url" => "https://cdn.simpleicons.org/cora?viewbox=auto"
            ],
            [
            "title" => "CorelDRAW",
            "slug" => "coreldraw",
            "url" => "https://cdn.simpleicons.org/coreldraw?viewbox=auto"
            ],
            [
            "title" => "Corona Engine",
            "slug" => "coronaengine",
            "url" => "https://cdn.simpleicons.org/coronaengine?viewbox=auto"
            ],
            [
            "title" => "Corona Renderer",
            "slug" => "coronarenderer",
            "url" => "https://cdn.simpleicons.org/coronarenderer?viewbox=auto"
            ],
            [
            "title" => "Corsair",
            "slug" => "corsair",
            "url" => "https://cdn.simpleicons.org/corsair?viewbox=auto"
            ],
            [
            "title" => "Couchbase",
            "slug" => "couchbase",
            "url" => "https://cdn.simpleicons.org/couchbase?viewbox=auto"
            ],
            [
            "title" => "Counter-Strike",
            "slug" => "counterstrike",
            "url" => "https://cdn.simpleicons.org/counterstrike?viewbox=auto"
            ],
            [
            "title" => "CountingWorks PRO",
            "slug" => "countingworkspro",
            "url" => "https://cdn.simpleicons.org/countingworkspro?viewbox=auto"
            ],
            [
            "title" => "Coursera",
            "slug" => "coursera",
            "url" => "https://cdn.simpleicons.org/coursera?viewbox=auto"
            ],
            [
            "title" => "Coveralls",
            "slug" => "coveralls",
            "url" => "https://cdn.simpleicons.org/coveralls?viewbox=auto"
            ],
            [
            "title" => "cPanel",
            "slug" => "cpanel",
            "url" => "https://cdn.simpleicons.org/cpanel?viewbox=auto"
            ],
            [
            "title" => "Craft CMS",
            "slug" => "craftcms",
            "url" => "https://cdn.simpleicons.org/craftcms?viewbox=auto"
            ],
            [
            "title" => "Craftsman",
            "slug" => "craftsman",
            "url" => "https://cdn.simpleicons.org/craftsman?viewbox=auto"
            ],
            [
            "title" => "CrateDB",
            "slug" => "cratedb",
            "url" => "https://cdn.simpleicons.org/cratedb?viewbox=auto"
            ],
            [
            "title" => "Crayon",
            "slug" => "crayon",
            "url" => "https://cdn.simpleicons.org/crayon?viewbox=auto"
            ],
            [
            "title" => "Creality",
            "slug" => "creality",
            "url" => "https://cdn.simpleicons.org/creality?viewbox=auto"
            ],
            [
            "title" => "Create React App",
            "slug" => "createreactapp",
            "url" => "https://cdn.simpleicons.org/createreactapp?viewbox=auto"
            ],
            [
            "title" => "Creative Commons",
            "slug" => "creativecommons",
            "url" => "https://cdn.simpleicons.org/creativecommons?viewbox=auto"
            ],
            [
            "title" => "Creative Technology",
            "slug" => "creativetechnology",
            "url" => "https://cdn.simpleicons.org/creativetechnology?viewbox=auto"
            ],
            [
            "title" => "Credly",
            "slug" => "credly",
            "url" => "https://cdn.simpleicons.org/credly?viewbox=auto"
            ],
            [
            "title" => "Crehana",
            "slug" => "crehana",
            "url" => "https://cdn.simpleicons.org/crehana?viewbox=auto"
            ],
            [
            "title" => "Crew United",
            "slug" => "crewunited",
            "url" => "https://cdn.simpleicons.org/crewunited?viewbox=auto"
            ],
            [
            "title" => "Critical Role",
            "slug" => "criticalrole",
            "url" => "https://cdn.simpleicons.org/criticalrole?viewbox=auto"
            ],
            [
            "title" => "Crowdin",
            "slug" => "crowdin",
            "url" => "https://cdn.simpleicons.org/crowdin?viewbox=auto"
            ],
            [
            "title" => "Crowdsource",
            "slug" => "crowdsource",
            "url" => "https://cdn.simpleicons.org/crowdsource?viewbox=auto"
            ],
            [
            "title" => "Crunchbase",
            "slug" => "crunchbase",
            "url" => "https://cdn.simpleicons.org/crunchbase?viewbox=auto"
            ],
            [
            "title" => "Crunchyroll",
            "slug" => "crunchyroll",
            "url" => "https://cdn.simpleicons.org/crunchyroll?viewbox=auto"
            ],
            [
            "title" => "CRYENGINE",
            "slug" => "cryengine",
            "url" => "https://cdn.simpleicons.org/cryengine?viewbox=auto"
            ],
            [
            "title" => "CryptPad",
            "slug" => "cryptpad",
            "url" => "https://cdn.simpleicons.org/cryptpad?viewbox=auto"
            ],
            [
            "title" => "Crystal",
            "slug" => "crystal",
            "url" => "https://cdn.simpleicons.org/crystal?viewbox=auto"
            ],
            [
            "title" => "CSS Design Awards",
            "slug" => "cssdesignawards",
            "url" => "https://cdn.simpleicons.org/cssdesignawards?viewbox=auto"
            ],
            [
            "title" => "CSS Modules",
            "slug" => "cssmodules",
            "url" => "https://cdn.simpleicons.org/cssmodules?viewbox=auto"
            ],
            [
            "title" => "CSS Wizardry",
            "slug" => "csswizardry",
            "url" => "https://cdn.simpleicons.org/csswizardry?viewbox=auto"
            ],
            [
            "title" => "CSS3",
            "slug" => "css3",
            "url" => "https://cdn.simpleicons.org/css3?viewbox=auto"
            ],
            [
            "title" => "CTS",
            "slug" => "cts",
            "url" => "https://cdn.simpleicons.org/cts?viewbox=auto"
            ],
            [
            "title" => "Cucumber",
            "slug" => "cucumber",
            "url" => "https://cdn.simpleicons.org/cucumber?viewbox=auto"
            ],
            [
            "title" => "Cultura",
            "slug" => "cultura",
            "url" => "https://cdn.simpleicons.org/cultura?viewbox=auto"
            ],
            [
            "title" => "curl",
            "slug" => "curl",
            "url" => "https://cdn.simpleicons.org/curl?viewbox=auto"
            ],
            [
            "title" => "CurseForge",
            "slug" => "curseforge",
            "url" => "https://cdn.simpleicons.org/curseforge?viewbox=auto"
            ],
            [
            "title" => "Custom Ink",
            "slug" => "customink",
            "url" => "https://cdn.simpleicons.org/customink?viewbox=auto"
            ],
            [
            "title" => "CyberDefenders",
            "slug" => "cyberdefenders",
            "url" => "https://cdn.simpleicons.org/cyberdefenders?viewbox=auto"
            ],
            [
            "title" => "Cycling '74",
            "slug" => "cycling74",
            "url" => "https://cdn.simpleicons.org/cycling74?viewbox=auto"
            ],
            [
            "title" => "Cypress",
            "slug" => "cypress",
            "url" => "https://cdn.simpleicons.org/cypress?viewbox=auto"
            ],
            [
            "title" => "Cytoscape.js",
            "slug" => "cytoscapedotjs",
            "url" => "https://cdn.simpleicons.org/cytoscapedotjs?viewbox=auto"
            ],
            [
            "title" => "D",
            "slug" => "d",
            "url" => "https://cdn.simpleicons.org/d?viewbox=auto"
            ],
            [
            "title" => "D-EDGE",
            "slug" => "dedge",
            "url" => "https://cdn.simpleicons.org/dedge?viewbox=auto"
            ],
            [
            "title" => "D-Wave Systems",
            "slug" => "dwavesystems",
            "url" => "https://cdn.simpleicons.org/dwavesystems?viewbox=auto"
            ],
            [
            "title" => "D3.js",
            "slug" => "d3dotjs",
            "url" => "https://cdn.simpleicons.org/d3dotjs?viewbox=auto"
            ],
            [
            "title" => "Dacia",
            "slug" => "dacia",
            "url" => "https://cdn.simpleicons.org/dacia?viewbox=auto"
            ],
            [
            "title" => "DAF",
            "slug" => "daf",
            "url" => "https://cdn.simpleicons.org/daf?viewbox=auto"
            ],
            [
            "title" => "daily.dev",
            "slug" => "dailydotdev",
            "url" => "https://cdn.simpleicons.org/dailydotdev?viewbox=auto"
            ],
            [
            "title" => "Dailymotion",
            "slug" => "dailymotion",
            "url" => "https://cdn.simpleicons.org/dailymotion?viewbox=auto"
            ],
            [
            "title" => "Daimler",
            "slug" => "daimler",
            "url" => "https://cdn.simpleicons.org/daimler?viewbox=auto"
            ],
            [
            "title" => "DaisyUI",
            "slug" => "daisyui",
            "url" => "https://cdn.simpleicons.org/daisyui?viewbox=auto"
            ],
            [
            "title" => "Dapr",
            "slug" => "dapr",
            "url" => "https://cdn.simpleicons.org/dapr?viewbox=auto"
            ],
            [
            "title" => "Dark Reader",
            "slug" => "darkreader",
            "url" => "https://cdn.simpleicons.org/darkreader?viewbox=auto"
            ],
            [
            "title" => "Dart",
            "slug" => "dart",
            "url" => "https://cdn.simpleicons.org/dart?viewbox=auto"
            ],
            [
            "title" => "Darty",
            "slug" => "darty",
            "url" => "https://cdn.simpleicons.org/darty?viewbox=auto"
            ],
            [
            "title" => "Das Erste",
            "slug" => "daserste",
            "url" => "https://cdn.simpleicons.org/daserste?viewbox=auto"
            ],
            [
            "title" => "Dash",
            "slug" => "dash",
            "url" => "https://cdn.simpleicons.org/dash?viewbox=auto"
            ],
            [
            "title" => "Dashlane",
            "slug" => "dashlane",
            "url" => "https://cdn.simpleicons.org/dashlane?viewbox=auto"
            ],
            [
            "title" => "Dask",
            "slug" => "dask",
            "url" => "https://cdn.simpleicons.org/dask?viewbox=auto"
            ],
            [
            "title" => "Dassault Systèmes",
            "slug" => "dassaultsystemes",
            "url" => "https://cdn.simpleicons.org/dassaultsystemes?viewbox=auto"
            ],
            [
            "title" => "data.ai",
            "slug" => "datadotai",
            "url" => "https://cdn.simpleicons.org/datadotai?viewbox=auto"
            ],
            [
            "title" => "Databricks",
            "slug" => "databricks",
            "url" => "https://cdn.simpleicons.org/databricks?viewbox=auto"
            ],
            [
            "title" => "DataCamp",
            "slug" => "datacamp",
            "url" => "https://cdn.simpleicons.org/datacamp?viewbox=auto"
            ],
            [
            "title" => "Datadog",
            "slug" => "datadog",
            "url" => "https://cdn.simpleicons.org/datadog?viewbox=auto"
            ],
            [
            "title" => "DataGrip",
            "slug" => "datagrip",
            "url" => "https://cdn.simpleicons.org/datagrip?viewbox=auto"
            ],
            [
            "title" => "Dataiku",
            "slug" => "dataiku",
            "url" => "https://cdn.simpleicons.org/dataiku?viewbox=auto"
            ],
            [
            "title" => "DataStax",
            "slug" => "datastax",
            "url" => "https://cdn.simpleicons.org/datastax?viewbox=auto"
            ],
            [
            "title" => "Dataverse",
            "slug" => "dataverse",
            "url" => "https://cdn.simpleicons.org/dataverse?viewbox=auto"
            ],
            [
            "title" => "date-fns",
            "slug" => "datefns",
            "url" => "https://cdn.simpleicons.org/datefns?viewbox=auto"
            ],
            [
            "title" => "DatoCMS",
            "slug" => "datocms",
            "url" => "https://cdn.simpleicons.org/datocms?viewbox=auto"
            ],
            [
            "title" => "Datto",
            "slug" => "datto",
            "url" => "https://cdn.simpleicons.org/datto?viewbox=auto"
            ],
            [
            "title" => "DaVinci Resolve",
            "slug" => "davinciresolve",
            "url" => "https://cdn.simpleicons.org/davinciresolve?viewbox=auto"
            ],
            [
            "title" => "Dazhong Dianping",
            "slug" => "dazhongdianping",
            "url" => "https://cdn.simpleicons.org/dazhongdianping?viewbox=auto"
            ],
            [
            "title" => "DAZN",
            "slug" => "dazn",
            "url" => "https://cdn.simpleicons.org/dazn?viewbox=auto"
            ],
            [
            "title" => "DBeaver",
            "slug" => "dbeaver",
            "url" => "https://cdn.simpleicons.org/dbeaver?viewbox=auto"
            ],
            [
            "title" => "dblp",
            "slug" => "dblp",
            "url" => "https://cdn.simpleicons.org/dblp?viewbox=auto"
            ],
            [
            "title" => "dbt",
            "slug" => "dbt",
            "url" => "https://cdn.simpleicons.org/dbt?viewbox=auto"
            ],
            [
            "title" => "DC Entertainment",
            "slug" => "dcentertainment",
            "url" => "https://cdn.simpleicons.org/dcentertainment?viewbox=auto"
            ],
            [
            "title" => "De'Longhi",
            "slug" => "delonghi",
            "url" => "https://cdn.simpleicons.org/delonghi?viewbox=auto"
            ],
            [
            "title" => "Debian",
            "slug" => "debian",
            "url" => "https://cdn.simpleicons.org/debian?viewbox=auto"
            ],
            [
            "title" => "Decap CMS",
            "slug" => "decapcms",
            "url" => "https://cdn.simpleicons.org/decapcms?viewbox=auto"
            ],
            [
            "title" => "Decentraland",
            "slug" => "decentraland",
            "url" => "https://cdn.simpleicons.org/decentraland?viewbox=auto"
            ],
            [
            "title" => "DeepCool",
            "slug" => "deepcool",
            "url" => "https://cdn.simpleicons.org/deepcool?viewbox=auto"
            ],
            [
            "title" => "Deepgram",
            "slug" => "deepgram",
            "url" => "https://cdn.simpleicons.org/deepgram?viewbox=auto"
            ],
            [
            "title" => "deepin",
            "slug" => "deepin",
            "url" => "https://cdn.simpleicons.org/deepin?viewbox=auto"
            ],
            [
            "title" => "DeepL",
            "slug" => "deepl",
            "url" => "https://cdn.simpleicons.org/deepl?viewbox=auto"
            ],
            [
            "title" => "Deepnote",
            "slug" => "deepnote",
            "url" => "https://cdn.simpleicons.org/deepnote?viewbox=auto"
            ],
            [
            "title" => "del.icio.us",
            "slug" => "deldoticiodotus",
            "url" => "https://cdn.simpleicons.org/deldoticiodotus?viewbox=auto"
            ],
            [
            "title" => "Deliveroo",
            "slug" => "deliveroo",
            "url" => "https://cdn.simpleicons.org/deliveroo?viewbox=auto"
            ],
            [
            "title" => "Dell",
            "slug" => "dell",
            "url" => "https://cdn.simpleicons.org/dell?viewbox=auto"
            ],
            [
            "title" => "Delphi",
            "slug" => "delphi",
            "url" => "https://cdn.simpleicons.org/delphi?viewbox=auto"
            ],
            [
            "title" => "Delta",
            "slug" => "delta",
            "url" => "https://cdn.simpleicons.org/delta?viewbox=auto"
            ],
            [
            "title" => "Deluge",
            "slug" => "deluge",
            "url" => "https://cdn.simpleicons.org/deluge?viewbox=auto"
            ],
            [
            "title" => "Deno",
            "slug" => "deno",
            "url" => "https://cdn.simpleicons.org/deno?viewbox=auto"
            ],
            [
            "title" => "Denon",
            "slug" => "denon",
            "url" => "https://cdn.simpleicons.org/denon?viewbox=auto"
            ],
            [
            "title" => "Dependabot",
            "slug" => "dependabot",
            "url" => "https://cdn.simpleicons.org/dependabot?viewbox=auto"
            ],
            [
            "title" => "Depositphotos",
            "slug" => "depositphotos",
            "url" => "https://cdn.simpleicons.org/depositphotos?viewbox=auto"
            ],
            [
            "title" => "Der Spiegel",
            "slug" => "derspiegel",
            "url" => "https://cdn.simpleicons.org/derspiegel?viewbox=auto"
            ],
            [
            "title" => "Designer News",
            "slug" => "designernews",
            "url" => "https://cdn.simpleicons.org/designernews?viewbox=auto"
            ],
            [
            "title" => "Deutsche Bahn",
            "slug" => "deutschebahn",
            "url" => "https://cdn.simpleicons.org/deutschebahn?viewbox=auto"
            ],
            [
            "title" => "Deutsche Bank",
            "slug" => "deutschebank",
            "url" => "https://cdn.simpleicons.org/deutschebank?viewbox=auto"
            ],
            [
            "title" => "Deutsche Post",
            "slug" => "deutschepost",
            "url" => "https://cdn.simpleicons.org/deutschepost?viewbox=auto"
            ],
            [
            "title" => "dev.to",
            "slug" => "devdotto",
            "url" => "https://cdn.simpleicons.org/devdotto?viewbox=auto"
            ],
            [
            "title" => "DevExpress",
            "slug" => "devexpress",
            "url" => "https://cdn.simpleicons.org/devexpress?viewbox=auto"
            ],
            [
            "title" => "DeviantArt",
            "slug" => "deviantart",
            "url" => "https://cdn.simpleicons.org/deviantart?viewbox=auto"
            ],
            [
            "title" => "Devpost",
            "slug" => "devpost",
            "url" => "https://cdn.simpleicons.org/devpost?viewbox=auto"
            ],
            [
            "title" => "devRant",
            "slug" => "devrant",
            "url" => "https://cdn.simpleicons.org/devrant?viewbox=auto"
            ],
            [
            "title" => "Dgraph",
            "slug" => "dgraph",
            "url" => "https://cdn.simpleicons.org/dgraph?viewbox=auto"
            ],
            [
            "title" => "DHL",
            "slug" => "dhl",
            "url" => "https://cdn.simpleicons.org/dhl?viewbox=auto"
            ],
            [
            "title" => "diagrams.net",
            "slug" => "diagramsdotnet",
            "url" => "https://cdn.simpleicons.org/diagramsdotnet?viewbox=auto"
            ],
            [
            "title" => "Dialogflow",
            "slug" => "dialogflow",
            "url" => "https://cdn.simpleicons.org/dialogflow?viewbox=auto"
            ],
            [
            "title" => "Diaspora",
            "slug" => "diaspora",
            "url" => "https://cdn.simpleicons.org/diaspora?viewbox=auto"
            ],
            [
            "title" => "Dictionary.com",
            "slug" => "dictionarydotcom",
            "url" => "https://cdn.simpleicons.org/dictionarydotcom?viewbox=auto"
            ],
            [
            "title" => "Digg",
            "slug" => "digg",
            "url" => "https://cdn.simpleicons.org/digg?viewbox=auto"
            ],
            [
            "title" => "Digi-Key Electronics",
            "slug" => "digikeyelectronics",
            "url" => "https://cdn.simpleicons.org/digikeyelectronics?viewbox=auto"
            ],
            [
            "title" => "DigitalOcean",
            "slug" => "digitalocean",
            "url" => "https://cdn.simpleicons.org/digitalocean?viewbox=auto"
            ],
            [
            "title" => "Diners Club",
            "slug" => "dinersclub",
            "url" => "https://cdn.simpleicons.org/dinersclub?viewbox=auto"
            ],
            [
            "title" => "Dior",
            "slug" => "dior",
            "url" => "https://cdn.simpleicons.org/dior?viewbox=auto"
            ],
            [
            "title" => "Directus",
            "slug" => "directus",
            "url" => "https://cdn.simpleicons.org/directus?viewbox=auto"
            ],
            [
            "title" => "Discogs",
            "slug" => "discogs",
            "url" => "https://cdn.simpleicons.org/discogs?viewbox=auto"
            ],
            [
            "title" => "Discord",
            "slug" => "discord",
            "url" => "https://cdn.simpleicons.org/discord?viewbox=auto"
            ],
            [
            "title" => "Discourse",
            "slug" => "discourse",
            "url" => "https://cdn.simpleicons.org/discourse?viewbox=auto"
            ],
            [
            "title" => "Discover",
            "slug" => "discover",
            "url" => "https://cdn.simpleicons.org/discover?viewbox=auto"
            ],
            [
            "title" => "Disqus",
            "slug" => "disqus",
            "url" => "https://cdn.simpleicons.org/disqus?viewbox=auto"
            ],
            [
            "title" => "Disroot",
            "slug" => "disroot",
            "url" => "https://cdn.simpleicons.org/disroot?viewbox=auto"
            ],
            [
            "title" => "Distrokid",
            "slug" => "distrokid",
            "url" => "https://cdn.simpleicons.org/distrokid?viewbox=auto"
            ],
            [
            "title" => "Django",
            "slug" => "django",
            "url" => "https://cdn.simpleicons.org/django?viewbox=auto"
            ],
            [
            "title" => "DJI",
            "slug" => "dji",
            "url" => "https://cdn.simpleicons.org/dji?viewbox=auto"
            ],
            [
            "title" => "Dlib",
            "slug" => "dlib",
            "url" => "https://cdn.simpleicons.org/dlib?viewbox=auto"
            ],
            [
            "title" => "DLNA",
            "slug" => "dlna",
            "url" => "https://cdn.simpleicons.org/dlna?viewbox=auto"
            ],
            [
            "title" => "dm",
            "slug" => "dm",
            "url" => "https://cdn.simpleicons.org/dm?viewbox=auto"
            ],
            [
            "title" => "Docker",
            "slug" => "docker",
            "url" => "https://cdn.simpleicons.org/docker?viewbox=auto"
            ],
            [
            "title" => "Docs.rs",
            "slug" => "docsdotrs",
            "url" => "https://cdn.simpleicons.org/docsdotrs?viewbox=auto"
            ],
            [
            "title" => "Docsify",
            "slug" => "docsify",
            "url" => "https://cdn.simpleicons.org/docsify?viewbox=auto"
            ],
            [
            "title" => "Docusaurus",
            "slug" => "docusaurus",
            "url" => "https://cdn.simpleicons.org/docusaurus?viewbox=auto"
            ],
            [
            "title" => "DocuSign",
            "slug" => "docusign",
            "url" => "https://cdn.simpleicons.org/docusign?viewbox=auto"
            ],
            [
            "title" => "Dogecoin",
            "slug" => "dogecoin",
            "url" => "https://cdn.simpleicons.org/dogecoin?viewbox=auto"
            ],
            [
            "title" => "DOI",
            "slug" => "doi",
            "url" => "https://cdn.simpleicons.org/doi?viewbox=auto"
            ],
            [
            "title" => "Dolby",
            "slug" => "dolby",
            "url" => "https://cdn.simpleicons.org/dolby?viewbox=auto"
            ],
            [
            "title" => "DoorDash",
            "slug" => "doordash",
            "url" => "https://cdn.simpleicons.org/doordash?viewbox=auto"
            ],
            [
            "title" => "Dota 2",
            "slug" => "dota2",
            "url" => "https://cdn.simpleicons.org/dota2?viewbox=auto"
            ],
            [
            "title" => "Douban",
            "slug" => "douban",
            "url" => "https://cdn.simpleicons.org/douban?viewbox=auto"
            ],
            [
            "title" => "Douban Read",
            "slug" => "doubanread",
            "url" => "https://cdn.simpleicons.org/doubanread?viewbox=auto"
            ],
            [
            "title" => "Dovecot",
            "slug" => "dovecot",
            "url" => "https://cdn.simpleicons.org/dovecot?viewbox=auto"
            ],
            [
            "title" => "Dovetail",
            "slug" => "dovetail",
            "url" => "https://cdn.simpleicons.org/dovetail?viewbox=auto"
            ],
            [
            "title" => "Doxygen",
            "slug" => "doxygen",
            "url" => "https://cdn.simpleicons.org/doxygen?viewbox=auto"
            ],
            [
            "title" => "DPD",
            "slug" => "dpd",
            "url" => "https://cdn.simpleicons.org/dpd?viewbox=auto"
            ],
            [
            "title" => "Dragonframe",
            "slug" => "dragonframe",
            "url" => "https://cdn.simpleicons.org/dragonframe?viewbox=auto"
            ],
            [
            "title" => "Draugiem.lv",
            "slug" => "draugiemdotlv",
            "url" => "https://cdn.simpleicons.org/draugiemdotlv?viewbox=auto"
            ],
            [
            "title" => "Dreamstime",
            "slug" => "dreamstime",
            "url" => "https://cdn.simpleicons.org/dreamstime?viewbox=auto"
            ],
            [
            "title" => "Dribbble",
            "slug" => "dribbble",
            "url" => "https://cdn.simpleicons.org/dribbble?viewbox=auto"
            ],
            [
            "title" => "Drizzle",
            "slug" => "drizzle",
            "url" => "https://cdn.simpleicons.org/drizzle?viewbox=auto"
            ],
            [
            "title" => "Drone",
            "slug" => "drone",
            "url" => "https://cdn.simpleicons.org/drone?viewbox=auto"
            ],
            [
            "title" => "Drooble",
            "slug" => "drooble",
            "url" => "https://cdn.simpleicons.org/drooble?viewbox=auto"
            ],
            [
            "title" => "Dropbox",
            "slug" => "dropbox",
            "url" => "https://cdn.simpleicons.org/dropbox?viewbox=auto"
            ],
            [
            "title" => "Drupal",
            "slug" => "drupal",
            "url" => "https://cdn.simpleicons.org/drupal?viewbox=auto"
            ],
            [
            "title" => "DS Automobiles",
            "slug" => "dsautomobiles",
            "url" => "https://cdn.simpleicons.org/dsautomobiles?viewbox=auto"
            ],
            [
            "title" => "DTS",
            "slug" => "dts",
            "url" => "https://cdn.simpleicons.org/dts?viewbox=auto"
            ],
            [
            "title" => "DTube",
            "slug" => "dtube",
            "url" => "https://cdn.simpleicons.org/dtube?viewbox=auto"
            ],
            [
            "title" => "Ducati",
            "slug" => "ducati",
            "url" => "https://cdn.simpleicons.org/ducati?viewbox=auto"
            ],
            [
            "title" => "DuckDB",
            "slug" => "duckdb",
            "url" => "https://cdn.simpleicons.org/duckdb?viewbox=auto"
            ],
            [
            "title" => "DuckDuckGo",
            "slug" => "duckduckgo",
            "url" => "https://cdn.simpleicons.org/duckduckgo?viewbox=auto"
            ],
            [
            "title" => "Dungeons & Dragons",
            "slug" => "dungeonsanddragons",
            "url" => "https://cdn.simpleicons.org/dungeonsanddragons?viewbox=auto"
            ],
            [
            "title" => "Dunked",
            "slug" => "dunked",
            "url" => "https://cdn.simpleicons.org/dunked?viewbox=auto"
            ],
            [
            "title" => "Dunzo",
            "slug" => "dunzo",
            "url" => "https://cdn.simpleicons.org/dunzo?viewbox=auto"
            ],
            [
            "title" => "Duolingo",
            "slug" => "duolingo",
            "url" => "https://cdn.simpleicons.org/duolingo?viewbox=auto"
            ],
            [
            "title" => "DVC",
            "slug" => "dvc",
            "url" => "https://cdn.simpleicons.org/dvc?viewbox=auto"
            ],
            [
            "title" => "dwm",
            "slug" => "dwm",
            "url" => "https://cdn.simpleicons.org/dwm?viewbox=auto"
            ],
            [
            "title" => "Dynamics 365",
            "slug" => "dynamics365",
            "url" => "https://cdn.simpleicons.org/dynamics365?viewbox=auto"
            ],
            [
            "title" => "Dynatrace",
            "slug" => "dynatrace",
            "url" => "https://cdn.simpleicons.org/dynatrace?viewbox=auto"
            ],
            [
            "title" => "E.Leclerc",
            "slug" => "edotleclerc",
            "url" => "https://cdn.simpleicons.org/edotleclerc?viewbox=auto"
            ],
            [
            "title" => "E3",
            "slug" => "e3",
            "url" => "https://cdn.simpleicons.org/e3?viewbox=auto"
            ],
            [
            "title" => "EA",
            "slug" => "ea",
            "url" => "https://cdn.simpleicons.org/ea?viewbox=auto"
            ],
            [
            "title" => "Eagle",
            "slug" => "eagle",
            "url" => "https://cdn.simpleicons.org/eagle?viewbox=auto"
            ],
            [
            "title" => "EasyEDA",
            "slug" => "easyeda",
            "url" => "https://cdn.simpleicons.org/easyeda?viewbox=auto"
            ],
            [
            "title" => "easyJet",
            "slug" => "easyjet",
            "url" => "https://cdn.simpleicons.org/easyjet?viewbox=auto"
            ],
            [
            "title" => "eBay",
            "slug" => "ebay",
            "url" => "https://cdn.simpleicons.org/ebay?viewbox=auto"
            ],
            [
            "title" => "EBOX",
            "slug" => "ebox",
            "url" => "https://cdn.simpleicons.org/ebox?viewbox=auto"
            ],
            [
            "title" => "Eclipse Adoptium",
            "slug" => "eclipseadoptium",
            "url" => "https://cdn.simpleicons.org/eclipseadoptium?viewbox=auto"
            ],
            [
            "title" => "Eclipse Che",
            "slug" => "eclipseche",
            "url" => "https://cdn.simpleicons.org/eclipseche?viewbox=auto"
            ],
            [
            "title" => "Eclipse IDE",
            "slug" => "eclipseide",
            "url" => "https://cdn.simpleicons.org/eclipseide?viewbox=auto"
            ],
            [
            "title" => "Eclipse Jetty",
            "slug" => "eclipsejetty",
            "url" => "https://cdn.simpleicons.org/eclipsejetty?viewbox=auto"
            ],
            [
            "title" => "Eclipse Mosquitto",
            "slug" => "eclipsemosquitto",
            "url" => "https://cdn.simpleicons.org/eclipsemosquitto?viewbox=auto"
            ],
            [
            "title" => "Eclipse Vert.x",
            "slug" => "eclipsevertdotx",
            "url" => "https://cdn.simpleicons.org/eclipsevertdotx?viewbox=auto"
            ],
            [
            "title" => "Ecovacs",
            "slug" => "ecovacs",
            "url" => "https://cdn.simpleicons.org/ecovacs?viewbox=auto"
            ],
            [
            "title" => "EDEKA",
            "slug" => "edeka",
            "url" => "https://cdn.simpleicons.org/edeka?viewbox=auto"
            ],
            [
            "title" => "Edge Impulse",
            "slug" => "edgeimpulse",
            "url" => "https://cdn.simpleicons.org/edgeimpulse?viewbox=auto"
            ],
            [
            "title" => "EditorConfig",
            "slug" => "editorconfig",
            "url" => "https://cdn.simpleicons.org/editorconfig?viewbox=auto"
            ],
            [
            "title" => "Educative",
            "slug" => "educative",
            "url" => "https://cdn.simpleicons.org/educative?viewbox=auto"
            ],
            [
            "title" => "edX",
            "slug" => "edx",
            "url" => "https://cdn.simpleicons.org/edx?viewbox=auto"
            ],
            [
            "title" => "egghead",
            "slug" => "egghead",
            "url" => "https://cdn.simpleicons.org/egghead?viewbox=auto"
            ],
            [
            "title" => "Egnyte",
            "slug" => "egnyte",
            "url" => "https://cdn.simpleicons.org/egnyte?viewbox=auto"
            ],
            [
            "title" => "Eight",
            "slug" => "eight",
            "url" => "https://cdn.simpleicons.org/eight?viewbox=auto"
            ],
            [
            "title" => "Eight Sleep",
            "slug" => "eightsleep",
            "url" => "https://cdn.simpleicons.org/eightsleep?viewbox=auto"
            ],
            [
            "title" => "EJS",
            "slug" => "ejs",
            "url" => "https://cdn.simpleicons.org/ejs?viewbox=auto"
            ],
            [
            "title" => "El Jueves",
            "slug" => "eljueves",
            "url" => "https://cdn.simpleicons.org/eljueves?viewbox=auto"
            ],
            [
            "title" => "Elastic",
            "slug" => "elastic",
            "url" => "https://cdn.simpleicons.org/elastic?viewbox=auto"
            ],
            [
            "title" => "Elastic Cloud",
            "slug" => "elasticcloud",
            "url" => "https://cdn.simpleicons.org/elasticcloud?viewbox=auto"
            ],
            [
            "title" => "Elastic Stack",
            "slug" => "elasticstack",
            "url" => "https://cdn.simpleicons.org/elasticstack?viewbox=auto"
            ],
            [
            "title" => "Elasticsearch",
            "slug" => "elasticsearch",
            "url" => "https://cdn.simpleicons.org/elasticsearch?viewbox=auto"
            ],
            [
            "title" => "Elavon",
            "slug" => "elavon",
            "url" => "https://cdn.simpleicons.org/elavon?viewbox=auto"
            ],
            [
            "title" => "Electron",
            "slug" => "electron",
            "url" => "https://cdn.simpleicons.org/electron?viewbox=auto"
            ],
            [
            "title" => "Electron Fiddle",
            "slug" => "electronfiddle",
            "url" => "https://cdn.simpleicons.org/electronfiddle?viewbox=auto"
            ],
            [
            "title" => "electron-builder",
            "slug" => "electronbuilder",
            "url" => "https://cdn.simpleicons.org/electronbuilder?viewbox=auto"
            ],
            [
            "title" => "Elegoo",
            "slug" => "elegoo",
            "url" => "https://cdn.simpleicons.org/elegoo?viewbox=auto"
            ],
            [
            "title" => "Element",
            "slug" => "element",
            "url" => "https://cdn.simpleicons.org/element?viewbox=auto"
            ],
            [
            "title" => "elementary",
            "slug" => "elementary",
            "url" => "https://cdn.simpleicons.org/elementary?viewbox=auto"
            ],
            [
            "title" => "Elementor",
            "slug" => "elementor",
            "url" => "https://cdn.simpleicons.org/elementor?viewbox=auto"
            ],
            [
            "title" => "Eleventy",
            "slug" => "eleventy",
            "url" => "https://cdn.simpleicons.org/eleventy?viewbox=auto"
            ],
            [
            "title" => "Elgato",
            "slug" => "elgato",
            "url" => "https://cdn.simpleicons.org/elgato?viewbox=auto"
            ],
            [
            "title" => "Elixir",
            "slug" => "elixir",
            "url" => "https://cdn.simpleicons.org/elixir?viewbox=auto"
            ],
            [
            "title" => "Ello",
            "slug" => "ello",
            "url" => "https://cdn.simpleicons.org/ello?viewbox=auto"
            ],
            [
            "title" => "Elm",
            "slug" => "elm",
            "url" => "https://cdn.simpleicons.org/elm?viewbox=auto"
            ],
            [
            "title" => "Elsevier",
            "slug" => "elsevier",
            "url" => "https://cdn.simpleicons.org/elsevier?viewbox=auto"
            ],
            [
            "title" => "Embarcadero",
            "slug" => "embarcadero",
            "url" => "https://cdn.simpleicons.org/embarcadero?viewbox=auto"
            ],
            [
            "title" => "Embark",
            "slug" => "embark",
            "url" => "https://cdn.simpleicons.org/embark?viewbox=auto"
            ],
            [
            "title" => "Ember.js",
            "slug" => "emberdotjs",
            "url" => "https://cdn.simpleicons.org/emberdotjs?viewbox=auto"
            ],
            [
            "title" => "Emby",
            "slug" => "emby",
            "url" => "https://cdn.simpleicons.org/emby?viewbox=auto"
            ],
            [
            "title" => "Emirates",
            "slug" => "emirates",
            "url" => "https://cdn.simpleicons.org/emirates?viewbox=auto"
            ],
            [
            "title" => "Emlakjet",
            "slug" => "emlakjet",
            "url" => "https://cdn.simpleicons.org/emlakjet?viewbox=auto"
            ],
            [
            "title" => "Empire Kred",
            "slug" => "empirekred",
            "url" => "https://cdn.simpleicons.org/empirekred?viewbox=auto"
            ],
            [
            "title" => "EndeavourOS",
            "slug" => "endeavouros",
            "url" => "https://cdn.simpleicons.org/endeavouros?viewbox=auto"
            ],
            [
            "title" => "Engadget",
            "slug" => "engadget",
            "url" => "https://cdn.simpleicons.org/engadget?viewbox=auto"
            ],
            [
            "title" => "Enpass",
            "slug" => "enpass",
            "url" => "https://cdn.simpleicons.org/enpass?viewbox=auto"
            ],
            [
            "title" => "EnterpriseDB",
            "slug" => "enterprisedb",
            "url" => "https://cdn.simpleicons.org/enterprisedb?viewbox=auto"
            ],
            [
            "title" => "Envato",
            "slug" => "envato",
            "url" => "https://cdn.simpleicons.org/envato?viewbox=auto"
            ],
            [
            "title" => "Envoy Proxy",
            "slug" => "envoyproxy",
            "url" => "https://cdn.simpleicons.org/envoyproxy?viewbox=auto"
            ],
            [
            "title" => "EPEL",
            "slug" => "epel",
            "url" => "https://cdn.simpleicons.org/epel?viewbox=auto"
            ],
            [
            "title" => "Epic Games",
            "slug" => "epicgames",
            "url" => "https://cdn.simpleicons.org/epicgames?viewbox=auto"
            ],
            [
            "title" => "Epson",
            "slug" => "epson",
            "url" => "https://cdn.simpleicons.org/epson?viewbox=auto"
            ],
            [
            "title" => "Equinix Metal",
            "slug" => "equinixmetal",
            "url" => "https://cdn.simpleicons.org/equinixmetal?viewbox=auto"
            ],
            [
            "title" => "Ericsson",
            "slug" => "ericsson",
            "url" => "https://cdn.simpleicons.org/ericsson?viewbox=auto"
            ],
            [
            "title" => "Erlang",
            "slug" => "erlang",
            "url" => "https://cdn.simpleicons.org/erlang?viewbox=auto"
            ],
            [
            "title" => "ERPNext",
            "slug" => "erpnext",
            "url" => "https://cdn.simpleicons.org/erpnext?viewbox=auto"
            ],
            [
            "title" => "esbuild",
            "slug" => "esbuild",
            "url" => "https://cdn.simpleicons.org/esbuild?viewbox=auto"
            ],
            [
            "title" => "ESEA",
            "slug" => "esea",
            "url" => "https://cdn.simpleicons.org/esea?viewbox=auto"
            ],
            [
            "title" => "ESLGaming",
            "slug" => "eslgaming",
            "url" => "https://cdn.simpleicons.org/eslgaming?viewbox=auto"
            ],
            [
            "title" => "ESLint",
            "slug" => "eslint",
            "url" => "https://cdn.simpleicons.org/eslint?viewbox=auto"
            ],
            [
            "title" => "Esoteric Software",
            "slug" => "esotericsoftware",
            "url" => "https://cdn.simpleicons.org/esotericsoftware?viewbox=auto"
            ],
            [
            "title" => "ESPHome",
            "slug" => "esphome",
            "url" => "https://cdn.simpleicons.org/esphome?viewbox=auto"
            ],
            [
            "title" => "Espressif",
            "slug" => "espressif",
            "url" => "https://cdn.simpleicons.org/espressif?viewbox=auto"
            ],
            [
            "title" => "ESRI",
            "slug" => "esri",
            "url" => "https://cdn.simpleicons.org/esri?viewbox=auto"
            ],
            [
            "title" => "etcd",
            "slug" => "etcd",
            "url" => "https://cdn.simpleicons.org/etcd?viewbox=auto"
            ],
            [
            "title" => "Ethereum",
            "slug" => "ethereum",
            "url" => "https://cdn.simpleicons.org/ethereum?viewbox=auto"
            ],
            [
            "title" => "Ethers",
            "slug" => "ethers",
            "url" => "https://cdn.simpleicons.org/ethers?viewbox=auto"
            ],
            [
            "title" => "Ethiopian Airlines",
            "slug" => "ethiopianairlines",
            "url" => "https://cdn.simpleicons.org/ethiopianairlines?viewbox=auto"
            ],
            [
            "title" => "Etihad Airways",
            "slug" => "etihadairways",
            "url" => "https://cdn.simpleicons.org/etihadairways?viewbox=auto"
            ],
            [
            "title" => "Etsy",
            "slug" => "etsy",
            "url" => "https://cdn.simpleicons.org/etsy?viewbox=auto"
            ],
            [
            "title" => "Event Store",
            "slug" => "eventstore",
            "url" => "https://cdn.simpleicons.org/eventstore?viewbox=auto"
            ],
            [
            "title" => "Eventbrite",
            "slug" => "eventbrite",
            "url" => "https://cdn.simpleicons.org/eventbrite?viewbox=auto"
            ],
            [
            "title" => "Evernote",
            "slug" => "evernote",
            "url" => "https://cdn.simpleicons.org/evernote?viewbox=auto"
            ],
            [
            "title" => "Excalidraw",
            "slug" => "excalidraw",
            "url" => "https://cdn.simpleicons.org/excalidraw?viewbox=auto"
            ],
            [
            "title" => "Exercism",
            "slug" => "exercism",
            "url" => "https://cdn.simpleicons.org/exercism?viewbox=auto"
            ],
            [
            "title" => "Exordo",
            "slug" => "exordo",
            "url" => "https://cdn.simpleicons.org/exordo?viewbox=auto"
            ],
            [
            "title" => "Exoscale",
            "slug" => "exoscale",
            "url" => "https://cdn.simpleicons.org/exoscale?viewbox=auto"
            ],
            [
            "title" => "Expedia",
            "slug" => "expedia",
            "url" => "https://cdn.simpleicons.org/expedia?viewbox=auto"
            ],
            [
            "title" => "Expensify",
            "slug" => "expensify",
            "url" => "https://cdn.simpleicons.org/expensify?viewbox=auto"
            ],
            [
            "title" => "Experts Exchange",
            "slug" => "expertsexchange",
            "url" => "https://cdn.simpleicons.org/expertsexchange?viewbox=auto"
            ],
            [
            "title" => "Expo",
            "slug" => "expo",
            "url" => "https://cdn.simpleicons.org/expo?viewbox=auto"
            ],
            [
            "title" => "Express",
            "slug" => "express",
            "url" => "https://cdn.simpleicons.org/express?viewbox=auto"
            ],
            [
            "title" => "ExpressVPN",
            "slug" => "expressvpn",
            "url" => "https://cdn.simpleicons.org/expressvpn?viewbox=auto"
            ],
            [
            "title" => "EyeEm",
            "slug" => "eyeem",
            "url" => "https://cdn.simpleicons.org/eyeem?viewbox=auto"
            ],
            [
            "title" => "F-Droid",
            "slug" => "fdroid",
            "url" => "https://cdn.simpleicons.org/fdroid?viewbox=auto"
            ],
            [
            "title" => "F-Secure",
            "slug" => "fsecure",
            "url" => "https://cdn.simpleicons.org/fsecure?viewbox=auto"
            ],
            [
            "title" => "F#",
            "slug" => "f",
            "url" => "https://cdn.simpleicons.org/f?viewbox=auto"
            ],
            [
            "title" => "F1",
            "slug" => "f1",
            "url" => "https://cdn.simpleicons.org/f1?viewbox=auto"
            ],
            [
            "title" => "F5",
            "slug" => "f5",
            "url" => "https://cdn.simpleicons.org/f5?viewbox=auto"
            ],
            [
            "title" => "Facebook",
            "slug" => "facebook",
            "url" => "https://cdn.simpleicons.org/facebook?viewbox=auto"
            ],
            [
            "title" => "Facebook Gaming",
            "slug" => "facebookgaming",
            "url" => "https://cdn.simpleicons.org/facebookgaming?viewbox=auto"
            ],
            [
            "title" => "Facebook Live",
            "slug" => "facebooklive",
            "url" => "https://cdn.simpleicons.org/facebooklive?viewbox=auto"
            ],
            [
            "title" => "FACEIT",
            "slug" => "faceit",
            "url" => "https://cdn.simpleicons.org/faceit?viewbox=auto"
            ],
            [
            "title" => "Facepunch",
            "slug" => "facepunch",
            "url" => "https://cdn.simpleicons.org/facepunch?viewbox=auto"
            ],
            [
            "title" => "Fairphone",
            "slug" => "fairphone",
            "url" => "https://cdn.simpleicons.org/fairphone?viewbox=auto"
            ],
            [
            "title" => "Falco",
            "slug" => "falco",
            "url" => "https://cdn.simpleicons.org/falco?viewbox=auto"
            ],
            [
            "title" => "Falcon",
            "slug" => "falcon",
            "url" => "https://cdn.simpleicons.org/falcon?viewbox=auto"
            ],
            [
            "title" => "FamPay",
            "slug" => "fampay",
            "url" => "https://cdn.simpleicons.org/fampay?viewbox=auto"
            ],
            [
            "title" => "Fandango",
            "slug" => "fandango",
            "url" => "https://cdn.simpleicons.org/fandango?viewbox=auto"
            ],
            [
            "title" => "Fandom",
            "slug" => "fandom",
            "url" => "https://cdn.simpleicons.org/fandom?viewbox=auto"
            ],
            [
            "title" => "Fanfou",
            "slug" => "fanfou",
            "url" => "https://cdn.simpleicons.org/fanfou?viewbox=auto"
            ],
            [
            "title" => "Fantom",
            "slug" => "fantom",
            "url" => "https://cdn.simpleicons.org/fantom?viewbox=auto"
            ],
            [
            "title" => "Farcaster",
            "slug" => "farcaster",
            "url" => "https://cdn.simpleicons.org/farcaster?viewbox=auto"
            ],
            [
            "title" => "FareHarbor",
            "slug" => "fareharbor",
            "url" => "https://cdn.simpleicons.org/fareharbor?viewbox=auto"
            ],
            [
            "title" => "FARFETCH",
            "slug" => "farfetch",
            "url" => "https://cdn.simpleicons.org/farfetch?viewbox=auto"
            ],
            [
            "title" => "FastAPI",
            "slug" => "fastapi",
            "url" => "https://cdn.simpleicons.org/fastapi?viewbox=auto"
            ],
            [
            "title" => "Fastify",
            "slug" => "fastify",
            "url" => "https://cdn.simpleicons.org/fastify?viewbox=auto"
            ],
            [
            "title" => "Fastlane",
            "slug" => "fastlane",
            "url" => "https://cdn.simpleicons.org/fastlane?viewbox=auto"
            ],
            [
            "title" => "Fastly",
            "slug" => "fastly",
            "url" => "https://cdn.simpleicons.org/fastly?viewbox=auto"
            ],
            [
            "title" => "Fathom",
            "slug" => "fathom",
            "url" => "https://cdn.simpleicons.org/fathom?viewbox=auto"
            ],
            [
            "title" => "Fauna",
            "slug" => "fauna",
            "url" => "https://cdn.simpleicons.org/fauna?viewbox=auto"
            ],
            [
            "title" => "Favro",
            "slug" => "favro",
            "url" => "https://cdn.simpleicons.org/favro?viewbox=auto"
            ],
            [
            "title" => "FeatHub",
            "slug" => "feathub",
            "url" => "https://cdn.simpleicons.org/feathub?viewbox=auto"
            ],
            [
            "title" => "FedEx",
            "slug" => "fedex",
            "url" => "https://cdn.simpleicons.org/fedex?viewbox=auto"
            ],
            [
            "title" => "Fedora",
            "slug" => "fedora",
            "url" => "https://cdn.simpleicons.org/fedora?viewbox=auto"
            ],
            [
            "title" => "Feedly",
            "slug" => "feedly",
            "url" => "https://cdn.simpleicons.org/feedly?viewbox=auto"
            ],
            [
            "title" => "Ferrari",
            "slug" => "ferrari",
            "url" => "https://cdn.simpleicons.org/ferrari?viewbox=auto"
            ],
            [
            "title" => "Ferrari N.V.",
            "slug" => "ferrarindotvdot",
            "url" => "https://cdn.simpleicons.org/ferrarindotvdot?viewbox=auto"
            ],
            [
            "title" => "FerretDB",
            "slug" => "ferretdb",
            "url" => "https://cdn.simpleicons.org/ferretdb?viewbox=auto"
            ],
            [
            "title" => "FFmpeg",
            "slug" => "ffmpeg",
            "url" => "https://cdn.simpleicons.org/ffmpeg?viewbox=auto"
            ],
            [
            "title" => "Fi",
            "slug" => "fi",
            "url" => "https://cdn.simpleicons.org/fi?viewbox=auto"
            ],
            [
            "title" => "Fiat",
            "slug" => "fiat",
            "url" => "https://cdn.simpleicons.org/fiat?viewbox=auto"
            ],
            [
            "title" => "Fido Alliance",
            "slug" => "fidoalliance",
            "url" => "https://cdn.simpleicons.org/fidoalliance?viewbox=auto"
            ],
            [
            "title" => "FIFA",
            "slug" => "fifa",
            "url" => "https://cdn.simpleicons.org/fifa?viewbox=auto"
            ],
            [
            "title" => "Fig",
            "slug" => "fig",
            "url" => "https://cdn.simpleicons.org/fig?viewbox=auto"
            ],
            [
            "title" => "Figma",
            "slug" => "figma",
            "url" => "https://cdn.simpleicons.org/figma?viewbox=auto"
            ],
            [
            "title" => "figshare",
            "slug" => "figshare",
            "url" => "https://cdn.simpleicons.org/figshare?viewbox=auto"
            ],
            [
            "title" => "Fila",
            "slug" => "fila",
            "url" => "https://cdn.simpleicons.org/fila?viewbox=auto"
            ],
            [
            "title" => "File.io",
            "slug" => "filedotio",
            "url" => "https://cdn.simpleicons.org/filedotio?viewbox=auto"
            ],
            [
            "title" => "Files",
            "slug" => "files",
            "url" => "https://cdn.simpleicons.org/files?viewbox=auto"
            ],
            [
            "title" => "FileZilla",
            "slug" => "filezilla",
            "url" => "https://cdn.simpleicons.org/filezilla?viewbox=auto"
            ],
            [
            "title" => "Fineco",
            "slug" => "fineco",
            "url" => "https://cdn.simpleicons.org/fineco?viewbox=auto"
            ],
            [
            "title" => "Fing",
            "slug" => "fing",
            "url" => "https://cdn.simpleicons.org/fing?viewbox=auto"
            ],
            [
            "title" => "Firebase",
            "slug" => "firebase",
            "url" => "https://cdn.simpleicons.org/firebase?viewbox=auto"
            ],
            [
            "title" => "Firefish",
            "slug" => "firefish",
            "url" => "https://cdn.simpleicons.org/firefish?viewbox=auto"
            ],
            [
            "title" => "Firefly III",
            "slug" => "fireflyiii",
            "url" => "https://cdn.simpleicons.org/fireflyiii?viewbox=auto"
            ],
            [
            "title" => "Firefox",
            "slug" => "firefox",
            "url" => "https://cdn.simpleicons.org/firefox?viewbox=auto"
            ],
            [
            "title" => "Firefox Browser",
            "slug" => "firefoxbrowser",
            "url" => "https://cdn.simpleicons.org/firefoxbrowser?viewbox=auto"
            ],
            [
            "title" => "Fireship",
            "slug" => "fireship",
            "url" => "https://cdn.simpleicons.org/fireship?viewbox=auto"
            ],
            [
            "title" => "Firewalla",
            "slug" => "firewalla",
            "url" => "https://cdn.simpleicons.org/firewalla?viewbox=auto"
            ],
            [
            "title" => "FIRST",
            "slug" => "first",
            "url" => "https://cdn.simpleicons.org/first?viewbox=auto"
            ],
            [
            "title" => "fish shell",
            "slug" => "fishshell",
            "url" => "https://cdn.simpleicons.org/fishshell?viewbox=auto"
            ],
            [
            "title" => "Fitbit",
            "slug" => "fitbit",
            "url" => "https://cdn.simpleicons.org/fitbit?viewbox=auto"
            ],
            [
            "title" => "FiveM",
            "slug" => "fivem",
            "url" => "https://cdn.simpleicons.org/fivem?viewbox=auto"
            ],
            [
            "title" => "Fiverr",
            "slug" => "fiverr",
            "url" => "https://cdn.simpleicons.org/fiverr?viewbox=auto"
            ],
            [
            "title" => "Fizz",
            "slug" => "fizz",
            "url" => "https://cdn.simpleicons.org/fizz?viewbox=auto"
            ],
            [
            "title" => "Flashforge",
            "slug" => "flashforge",
            "url" => "https://cdn.simpleicons.org/flashforge?viewbox=auto"
            ],
            [
            "title" => "Flask",
            "slug" => "flask",
            "url" => "https://cdn.simpleicons.org/flask?viewbox=auto"
            ],
            [
            "title" => "Flat",
            "slug" => "flat",
            "url" => "https://cdn.simpleicons.org/flat?viewbox=auto"
            ],
            [
            "title" => "Flathub",
            "slug" => "flathub",
            "url" => "https://cdn.simpleicons.org/flathub?viewbox=auto"
            ],
            [
            "title" => "Flatpak",
            "slug" => "flatpak",
            "url" => "https://cdn.simpleicons.org/flatpak?viewbox=auto"
            ],
            [
            "title" => "Flickr",
            "slug" => "flickr",
            "url" => "https://cdn.simpleicons.org/flickr?viewbox=auto"
            ],
            [
            "title" => "Flightaware",
            "slug" => "flightaware",
            "url" => "https://cdn.simpleicons.org/flightaware?viewbox=auto"
            ],
            [
            "title" => "Flipboard",
            "slug" => "flipboard",
            "url" => "https://cdn.simpleicons.org/flipboard?viewbox=auto"
            ],
            [
            "title" => "Flipkart",
            "slug" => "flipkart",
            "url" => "https://cdn.simpleicons.org/flipkart?viewbox=auto"
            ],
            [
            "title" => "Floatplane",
            "slug" => "floatplane",
            "url" => "https://cdn.simpleicons.org/floatplane?viewbox=auto"
            ],
            [
            "title" => "Flood",
            "slug" => "flood",
            "url" => "https://cdn.simpleicons.org/flood?viewbox=auto"
            ],
            [
            "title" => "Fluent Bit",
            "slug" => "fluentbit",
            "url" => "https://cdn.simpleicons.org/fluentbit?viewbox=auto"
            ],
            [
            "title" => "Fluentd",
            "slug" => "fluentd",
            "url" => "https://cdn.simpleicons.org/fluentd?viewbox=auto"
            ],
            [
            "title" => "Fluke",
            "slug" => "fluke",
            "url" => "https://cdn.simpleicons.org/fluke?viewbox=auto"
            ],
            [
            "title" => "Flutter",
            "slug" => "flutter",
            "url" => "https://cdn.simpleicons.org/flutter?viewbox=auto"
            ],
            [
            "title" => "Flux",
            "slug" => "flux",
            "url" => "https://cdn.simpleicons.org/flux?viewbox=auto"
            ],
            [
            "title" => "Fluxus",
            "slug" => "fluxus",
            "url" => "https://cdn.simpleicons.org/fluxus?viewbox=auto"
            ],
            [
            "title" => "Flyway",
            "slug" => "flyway",
            "url" => "https://cdn.simpleicons.org/flyway?viewbox=auto"
            ],
            [
            "title" => "FMOD",
            "slug" => "fmod",
            "url" => "https://cdn.simpleicons.org/fmod?viewbox=auto"
            ],
            [
            "title" => "Fnac",
            "slug" => "fnac",
            "url" => "https://cdn.simpleicons.org/fnac?viewbox=auto"
            ],
            [
            "title" => "Folium",
            "slug" => "folium",
            "url" => "https://cdn.simpleicons.org/folium?viewbox=auto"
            ],
            [
            "title" => "Fonoma",
            "slug" => "fonoma",
            "url" => "https://cdn.simpleicons.org/fonoma?viewbox=auto"
            ],
            [
            "title" => "Font Awesome",
            "slug" => "fontawesome",
            "url" => "https://cdn.simpleicons.org/fontawesome?viewbox=auto"
            ],
            [
            "title" => "FontBase",
            "slug" => "fontbase",
            "url" => "https://cdn.simpleicons.org/fontbase?viewbox=auto"
            ],
            [
            "title" => "FontForge",
            "slug" => "fontforge",
            "url" => "https://cdn.simpleicons.org/fontforge?viewbox=auto"
            ],
            [
            "title" => "foobar2000",
            "slug" => "foobar2000",
            "url" => "https://cdn.simpleicons.org/foobar2000?viewbox=auto"
            ],
            [
            "title" => "foodpanda",
            "slug" => "foodpanda",
            "url" => "https://cdn.simpleicons.org/foodpanda?viewbox=auto"
            ],
            [
            "title" => "Ford",
            "slug" => "ford",
            "url" => "https://cdn.simpleicons.org/ford?viewbox=auto"
            ],
            [
            "title" => "Forgejo",
            "slug" => "forgejo",
            "url" => "https://cdn.simpleicons.org/forgejo?viewbox=auto"
            ],
            [
            "title" => "Formspree",
            "slug" => "formspree",
            "url" => "https://cdn.simpleicons.org/formspree?viewbox=auto"
            ],
            [
            "title" => "Formstack",
            "slug" => "formstack",
            "url" => "https://cdn.simpleicons.org/formstack?viewbox=auto"
            ],
            [
            "title" => "Fortinet",
            "slug" => "fortinet",
            "url" => "https://cdn.simpleicons.org/fortinet?viewbox=auto"
            ],
            [
            "title" => "Fortran",
            "slug" => "fortran",
            "url" => "https://cdn.simpleicons.org/fortran?viewbox=auto"
            ],
            [
            "title" => "Fossa",
            "slug" => "fossa",
            "url" => "https://cdn.simpleicons.org/fossa?viewbox=auto"
            ],
            [
            "title" => "Fossil SCM",
            "slug" => "fossilscm",
            "url" => "https://cdn.simpleicons.org/fossilscm?viewbox=auto"
            ],
            [
            "title" => "Foundry Virtual Tabletop",
            "slug" => "foundryvirtualtabletop",
            "url" => "https://cdn.simpleicons.org/foundryvirtualtabletop?viewbox=auto"
            ],
            [
            "title" => "Foursquare",
            "slug" => "foursquare",
            "url" => "https://cdn.simpleicons.org/foursquare?viewbox=auto"
            ],
            [
            "title" => "Foursquare City Guide",
            "slug" => "foursquarecityguide",
            "url" => "https://cdn.simpleicons.org/foursquarecityguide?viewbox=auto"
            ],
            [
            "title" => "FOX",
            "slug" => "fox",
            "url" => "https://cdn.simpleicons.org/fox?viewbox=auto"
            ],
            [
            "title" => "Foxtel",
            "slug" => "foxtel",
            "url" => "https://cdn.simpleicons.org/foxtel?viewbox=auto"
            ],
            [
            "title" => "Fozzy",
            "slug" => "fozzy",
            "url" => "https://cdn.simpleicons.org/fozzy?viewbox=auto"
            ],
            [
            "title" => "Framer",
            "slug" => "framer",
            "url" => "https://cdn.simpleicons.org/framer?viewbox=auto"
            ],
            [
            "title" => "Framework",
            "slug" => "framework",
            "url" => "https://cdn.simpleicons.org/framework?viewbox=auto"
            ],
            [
            "title" => "Framework7",
            "slug" => "framework7",
            "url" => "https://cdn.simpleicons.org/framework7?viewbox=auto"
            ],
            [
            "title" => "Franprix",
            "slug" => "franprix",
            "url" => "https://cdn.simpleicons.org/franprix?viewbox=auto"
            ],
            [
            "title" => "Frappe",
            "slug" => "frappe",
            "url" => "https://cdn.simpleicons.org/frappe?viewbox=auto"
            ],
            [
            "title" => "Fraunhofer-Gesellschaft",
            "slug" => "fraunhofergesellschaft",
            "url" => "https://cdn.simpleicons.org/fraunhofergesellschaft?viewbox=auto"
            ],
            [
            "title" => "FreeBSD",
            "slug" => "freebsd",
            "url" => "https://cdn.simpleicons.org/freebsd?viewbox=auto"
            ],
            [
            "title" => "FreeCAD",
            "slug" => "freecad",
            "url" => "https://cdn.simpleicons.org/freecad?viewbox=auto"
            ],
            [
            "title" => "freeCodeCamp",
            "slug" => "freecodecamp",
            "url" => "https://cdn.simpleicons.org/freecodecamp?viewbox=auto"
            ],
            [
            "title" => "freedesktop.org",
            "slug" => "freedesktopdotorg",
            "url" => "https://cdn.simpleicons.org/freedesktopdotorg?viewbox=auto"
            ],
            [
            "title" => "Freelancer",
            "slug" => "freelancer",
            "url" => "https://cdn.simpleicons.org/freelancer?viewbox=auto"
            ],
            [
            "title" => "freelancermap",
            "slug" => "freelancermap",
            "url" => "https://cdn.simpleicons.org/freelancermap?viewbox=auto"
            ],
            [
            "title" => "FreeNAS",
            "slug" => "freenas",
            "url" => "https://cdn.simpleicons.org/freenas?viewbox=auto"
            ],
            [
            "title" => "Freepik",
            "slug" => "freepik",
            "url" => "https://cdn.simpleicons.org/freepik?viewbox=auto"
            ],
            [
            "title" => "Frontend Mentor",
            "slug" => "frontendmentor",
            "url" => "https://cdn.simpleicons.org/frontendmentor?viewbox=auto"
            ],
            [
            "title" => "Frontify",
            "slug" => "frontify",
            "url" => "https://cdn.simpleicons.org/frontify?viewbox=auto"
            ],
            [
            "title" => "Fubo",
            "slug" => "fubo",
            "url" => "https://cdn.simpleicons.org/fubo?viewbox=auto"
            ],
            [
            "title" => "Fueler",
            "slug" => "fueler",
            "url" => "https://cdn.simpleicons.org/fueler?viewbox=auto"
            ],
            [
            "title" => "Fuga Cloud",
            "slug" => "fugacloud",
            "url" => "https://cdn.simpleicons.org/fugacloud?viewbox=auto"
            ],
            [
            "title" => "Fujifilm",
            "slug" => "fujifilm",
            "url" => "https://cdn.simpleicons.org/fujifilm?viewbox=auto"
            ],
            [
            "title" => "Fujitsu",
            "slug" => "fujitsu",
            "url" => "https://cdn.simpleicons.org/fujitsu?viewbox=auto"
            ],
            [
            "title" => "Funimation",
            "slug" => "funimation",
            "url" => "https://cdn.simpleicons.org/funimation?viewbox=auto"
            ],
            [
            "title" => "Fur Affinity",
            "slug" => "furaffinity",
            "url" => "https://cdn.simpleicons.org/furaffinity?viewbox=auto"
            ],
            [
            "title" => "Furry Network",
            "slug" => "furrynetwork",
            "url" => "https://cdn.simpleicons.org/furrynetwork?viewbox=auto"
            ],
            [
            "title" => "FusionAuth",
            "slug" => "fusionauth",
            "url" => "https://cdn.simpleicons.org/fusionauth?viewbox=auto"
            ],
            [
            "title" => "FutureLearn",
            "slug" => "futurelearn",
            "url" => "https://cdn.simpleicons.org/futurelearn?viewbox=auto"
            ],
            [
            "title" => "G2",
            "slug" => "g2",
            "url" => "https://cdn.simpleicons.org/g2?viewbox=auto"
            ],
            [
            "title" => "G2A",
            "slug" => "g2a",
            "url" => "https://cdn.simpleicons.org/g2a?viewbox=auto"
            ],
            [
            "title" => "G2G",
            "slug" => "g2g",
            "url" => "https://cdn.simpleicons.org/g2g?viewbox=auto"
            ],
            [
            "title" => "Galaxus",
            "slug" => "galaxus",
            "url" => "https://cdn.simpleicons.org/galaxus?viewbox=auto"
            ],
            [
            "title" => "Game & Watch",
            "slug" => "gameandwatch",
            "url" => "https://cdn.simpleicons.org/gameandwatch?viewbox=auto"
            ],
            [
            "title" => "Game Developer",
            "slug" => "gamedeveloper",
            "url" => "https://cdn.simpleicons.org/gamedeveloper?viewbox=auto"
            ],
            [
            "title" => "Game Jolt",
            "slug" => "gamejolt",
            "url" => "https://cdn.simpleicons.org/gamejolt?viewbox=auto"
            ],
            [
            "title" => "GameBanana",
            "slug" => "gamebanana",
            "url" => "https://cdn.simpleicons.org/gamebanana?viewbox=auto"
            ],
            [
            "title" => "Gameloft",
            "slug" => "gameloft",
            "url" => "https://cdn.simpleicons.org/gameloft?viewbox=auto"
            ],
            [
            "title" => "Gamemaker",
            "slug" => "gamemaker",
            "url" => "https://cdn.simpleicons.org/gamemaker?viewbox=auto"
            ],
            [
            "title" => "Garmin",
            "slug" => "garmin",
            "url" => "https://cdn.simpleicons.org/garmin?viewbox=auto"
            ],
            [
            "title" => "Gatling",
            "slug" => "gatling",
            "url" => "https://cdn.simpleicons.org/gatling?viewbox=auto"
            ],
            [
            "title" => "Gatsby",
            "slug" => "gatsby",
            "url" => "https://cdn.simpleicons.org/gatsby?viewbox=auto"
            ],
            [
            "title" => "Gcore",
            "slug" => "gcore",
            "url" => "https://cdn.simpleicons.org/gcore?viewbox=auto"
            ],
            [
            "title" => "GDAL",
            "slug" => "gdal",
            "url" => "https://cdn.simpleicons.org/gdal?viewbox=auto"
            ],
            [
            "title" => "Géant",
            "slug" => "geant",
            "url" => "https://cdn.simpleicons.org/geant?viewbox=auto"
            ],
            [
            "title" => "GeeksforGeeks",
            "slug" => "geeksforgeeks",
            "url" => "https://cdn.simpleicons.org/geeksforgeeks?viewbox=auto"
            ],
            [
            "title" => "General Electric",
            "slug" => "generalelectric",
            "url" => "https://cdn.simpleicons.org/generalelectric?viewbox=auto"
            ],
            [
            "title" => "General Motors",
            "slug" => "generalmotors",
            "url" => "https://cdn.simpleicons.org/generalmotors?viewbox=auto"
            ],
            [
            "title" => "Genius",
            "slug" => "genius",
            "url" => "https://cdn.simpleicons.org/genius?viewbox=auto"
            ],
            [
            "title" => "Gentoo",
            "slug" => "gentoo",
            "url" => "https://cdn.simpleicons.org/gentoo?viewbox=auto"
            ],
            [
            "title" => "Geocaching",
            "slug" => "geocaching",
            "url" => "https://cdn.simpleicons.org/geocaching?viewbox=auto"
            ],
            [
            "title" => "GeoPandas",
            "slug" => "geopandas",
            "url" => "https://cdn.simpleicons.org/geopandas?viewbox=auto"
            ],
            [
            "title" => "Gerrit",
            "slug" => "gerrit",
            "url" => "https://cdn.simpleicons.org/gerrit?viewbox=auto"
            ],
            [
            "title" => "GetX",
            "slug" => "getx",
            "url" => "https://cdn.simpleicons.org/getx?viewbox=auto"
            ],
            [
            "title" => "Ghost",
            "slug" => "ghost",
            "url" => "https://cdn.simpleicons.org/ghost?viewbox=auto"
            ],
            [
            "title" => "Ghostery",
            "slug" => "ghostery",
            "url" => "https://cdn.simpleicons.org/ghostery?viewbox=auto"
            ],
            [
            "title" => "GIMP",
            "slug" => "gimp",
            "url" => "https://cdn.simpleicons.org/gimp?viewbox=auto"
            ],
            [
            "title" => "Gin",
            "slug" => "gin",
            "url" => "https://cdn.simpleicons.org/gin?viewbox=auto"
            ],
            [
            "title" => "GIPHY",
            "slug" => "giphy",
            "url" => "https://cdn.simpleicons.org/giphy?viewbox=auto"
            ],
            [
            "title" => "Git",
            "slug" => "git",
            "url" => "https://cdn.simpleicons.org/git?viewbox=auto"
            ],
            [
            "title" => "Git Extensions",
            "slug" => "gitextensions",
            "url" => "https://cdn.simpleicons.org/gitextensions?viewbox=auto"
            ],
            [
            "title" => "Git LFS",
            "slug" => "gitlfs",
            "url" => "https://cdn.simpleicons.org/gitlfs?viewbox=auto"
            ],
            [
            "title" => "GitBook",
            "slug" => "gitbook",
            "url" => "https://cdn.simpleicons.org/gitbook?viewbox=auto"
            ],
            [
            "title" => "Gitconnected",
            "slug" => "gitconnected",
            "url" => "https://cdn.simpleicons.org/gitconnected?viewbox=auto"
            ],
            [
            "title" => "Gitea",
            "slug" => "gitea",
            "url" => "https://cdn.simpleicons.org/gitea?viewbox=auto"
            ],
            [
            "title" => "Gitee",
            "slug" => "gitee",
            "url" => "https://cdn.simpleicons.org/gitee?viewbox=auto"
            ],
            [
            "title" => "GitHub",
            "slug" => "github",
            "url" => "https://cdn.simpleicons.org/github?viewbox=auto"
            ],
            [
            "title" => "GitHub Actions",
            "slug" => "githubactions",
            "url" => "https://cdn.simpleicons.org/githubactions?viewbox=auto"
            ],
            [
            "title" => "GitHub Copilot",
            "slug" => "githubcopilot",
            "url" => "https://cdn.simpleicons.org/githubcopilot?viewbox=auto"
            ],
            [
            "title" => "GitHub Pages",
            "slug" => "githubpages",
            "url" => "https://cdn.simpleicons.org/githubpages?viewbox=auto"
            ],
            [
            "title" => "GitHub Sponsors",
            "slug" => "githubsponsors",
            "url" => "https://cdn.simpleicons.org/githubsponsors?viewbox=auto"
            ],
            [
            "title" => "gitignore.io",
            "slug" => "gitignoredotio",
            "url" => "https://cdn.simpleicons.org/gitignoredotio?viewbox=auto"
            ],
            [
            "title" => "GitKraken",
            "slug" => "gitkraken",
            "url" => "https://cdn.simpleicons.org/gitkraken?viewbox=auto"
            ],
            [
            "title" => "GitLab",
            "slug" => "gitlab",
            "url" => "https://cdn.simpleicons.org/gitlab?viewbox=auto"
            ],
            [
            "title" => "Gitpod",
            "slug" => "gitpod",
            "url" => "https://cdn.simpleicons.org/gitpod?viewbox=auto"
            ],
            [
            "title" => "Gitter",
            "slug" => "gitter",
            "url" => "https://cdn.simpleicons.org/gitter?viewbox=auto"
            ],
            [
            "title" => "Glassdoor",
            "slug" => "glassdoor",
            "url" => "https://cdn.simpleicons.org/glassdoor?viewbox=auto"
            ],
            [
            "title" => "Glide",
            "slug" => "glide",
            "url" => "https://cdn.simpleicons.org/glide?viewbox=auto"
            ],
            [
            "title" => "Glitch",
            "slug" => "glitch",
            "url" => "https://cdn.simpleicons.org/glitch?viewbox=auto"
            ],
            [
            "title" => "Globus",
            "slug" => "globus",
            "url" => "https://cdn.simpleicons.org/globus?viewbox=auto"
            ],
            [
            "title" => "Glovo",
            "slug" => "glovo",
            "url" => "https://cdn.simpleicons.org/glovo?viewbox=auto"
            ],
            [
            "title" => "Gmail",
            "slug" => "gmail",
            "url" => "https://cdn.simpleicons.org/gmail?viewbox=auto"
            ],
            [
            "title" => "GNOME",
            "slug" => "gnome",
            "url" => "https://cdn.simpleicons.org/gnome?viewbox=auto"
            ],
            [
            "title" => "GNOME Terminal",
            "slug" => "gnometerminal",
            "url" => "https://cdn.simpleicons.org/gnometerminal?viewbox=auto"
            ],
            [
            "title" => "GNU",
            "slug" => "gnu",
            "url" => "https://cdn.simpleicons.org/gnu?viewbox=auto"
            ],
            [
            "title" => "GNU Bash",
            "slug" => "gnubash",
            "url" => "https://cdn.simpleicons.org/gnubash?viewbox=auto"
            ],
            [
            "title" => "GNU Emacs",
            "slug" => "gnuemacs",
            "url" => "https://cdn.simpleicons.org/gnuemacs?viewbox=auto"
            ],
            [
            "title" => "GNU IceCat",
            "slug" => "gnuicecat",
            "url" => "https://cdn.simpleicons.org/gnuicecat?viewbox=auto"
            ],
            [
            "title" => "GNU Privacy Guard",
            "slug" => "gnuprivacyguard",
            "url" => "https://cdn.simpleicons.org/gnuprivacyguard?viewbox=auto"
            ],
            [
            "title" => "GNU social",
            "slug" => "gnusocial",
            "url" => "https://cdn.simpleicons.org/gnusocial?viewbox=auto"
            ],
            [
            "title" => "Go",
            "slug" => "go",
            "url" => "https://cdn.simpleicons.org/go?viewbox=auto"
            ],
            [
            "title" => "GoCD",
            "slug" => "gocd",
            "url" => "https://cdn.simpleicons.org/gocd?viewbox=auto"
            ],
            [
            "title" => "GoDaddy",
            "slug" => "godaddy",
            "url" => "https://cdn.simpleicons.org/godaddy?viewbox=auto"
            ],
            [
            "title" => "Godot Engine",
            "slug" => "godotengine",
            "url" => "https://cdn.simpleicons.org/godotengine?viewbox=auto"
            ],
            [
            "title" => "GoFundMe",
            "slug" => "gofundme",
            "url" => "https://cdn.simpleicons.org/gofundme?viewbox=auto"
            ],
            [
            "title" => "GOG.com",
            "slug" => "gogdotcom",
            "url" => "https://cdn.simpleicons.org/gogdotcom?viewbox=auto"
            ],
            [
            "title" => "Gojek",
            "slug" => "gojek",
            "url" => "https://cdn.simpleicons.org/gojek?viewbox=auto"
            ],
            [
            "title" => "GoLand",
            "slug" => "goland",
            "url" => "https://cdn.simpleicons.org/goland?viewbox=auto"
            ],
            [
            "title" => "GoldenLine",
            "slug" => "goldenline",
            "url" => "https://cdn.simpleicons.org/goldenline?viewbox=auto"
            ],
            [
            "title" => "Goldman Sachs",
            "slug" => "goldmansachs",
            "url" => "https://cdn.simpleicons.org/goldmansachs?viewbox=auto"
            ],
            [
            "title" => "Goodreads",
            "slug" => "goodreads",
            "url" => "https://cdn.simpleicons.org/goodreads?viewbox=auto"
            ],
            [
            "title" => "Google",
            "slug" => "google",
            "url" => "https://cdn.simpleicons.org/google?viewbox=auto"
            ],
            [
            "title" => "Google AdMob",
            "slug" => "googleadmob",
            "url" => "https://cdn.simpleicons.org/googleadmob?viewbox=auto"
            ],
            [
            "title" => "Google Ads",
            "slug" => "googleads",
            "url" => "https://cdn.simpleicons.org/googleads?viewbox=auto"
            ],
            [
            "title" => "Google AdSense",
            "slug" => "googleadsense",
            "url" => "https://cdn.simpleicons.org/googleadsense?viewbox=auto"
            ],
            [
            "title" => "Google Analytics",
            "slug" => "googleanalytics",
            "url" => "https://cdn.simpleicons.org/googleanalytics?viewbox=auto"
            ],
            [
            "title" => "Google Apps Script",
            "slug" => "googleappsscript",
            "url" => "https://cdn.simpleicons.org/googleappsscript?viewbox=auto"
            ],
            [
            "title" => "Google Assistant",
            "slug" => "googleassistant",
            "url" => "https://cdn.simpleicons.org/googleassistant?viewbox=auto"
            ],
            [
            "title" => "Google Authenticator",
            "slug" => "googleauthenticator",
            "url" => "https://cdn.simpleicons.org/googleauthenticator?viewbox=auto"
            ],
            [
            "title" => "Google BigQuery",
            "slug" => "googlebigquery",
            "url" => "https://cdn.simpleicons.org/googlebigquery?viewbox=auto"
            ],
            [
            "title" => "Google Bigtable",
            "slug" => "googlebigtable",
            "url" => "https://cdn.simpleicons.org/googlebigtable?viewbox=auto"
            ],
            [
            "title" => "Google Calendar",
            "slug" => "googlecalendar",
            "url" => "https://cdn.simpleicons.org/googlecalendar?viewbox=auto"
            ],
            [
            "title" => "Google Campaign Manager 360",
            "slug" => "googlecampaignmanager360",
            "url" => "https://cdn.simpleicons.org/googlecampaignmanager360?viewbox=auto"
            ],
            [
            "title" => "Google Cardboard",
            "slug" => "googlecardboard",
            "url" => "https://cdn.simpleicons.org/googlecardboard?viewbox=auto"
            ],
            [
            "title" => "Google Chat",
            "slug" => "googlechat",
            "url" => "https://cdn.simpleicons.org/googlechat?viewbox=auto"
            ],
            [
            "title" => "Google Chrome",
            "slug" => "googlechrome",
            "url" => "https://cdn.simpleicons.org/googlechrome?viewbox=auto"
            ],
            [
            "title" => "Google Chronicle",
            "slug" => "googlechronicle",
            "url" => "https://cdn.simpleicons.org/googlechronicle?viewbox=auto"
            ],
            [
            "title" => "Google Classroom",
            "slug" => "googleclassroom",
            "url" => "https://cdn.simpleicons.org/googleclassroom?viewbox=auto"
            ],
            [
            "title" => "Google Cloud",
            "slug" => "googlecloud",
            "url" => "https://cdn.simpleicons.org/googlecloud?viewbox=auto"
            ],
            [
            "title" => "Google Cloud Composer",
            "slug" => "googlecloudcomposer",
            "url" => "https://cdn.simpleicons.org/googlecloudcomposer?viewbox=auto"
            ],
            [
            "title" => "Google Cloud Spanner",
            "slug" => "googlecloudspanner",
            "url" => "https://cdn.simpleicons.org/googlecloudspanner?viewbox=auto"
            ],
            [
            "title" => "Google Cloud Storage",
            "slug" => "googlecloudstorage",
            "url" => "https://cdn.simpleicons.org/googlecloudstorage?viewbox=auto"
            ],
            [
            "title" => "Google Colab",
            "slug" => "googlecolab",
            "url" => "https://cdn.simpleicons.org/googlecolab?viewbox=auto"
            ],
            [
            "title" => "Google Container Optimized OS",
            "slug" => "googlecontaineroptimizedos",
            "url" => "https://cdn.simpleicons.org/googlecontaineroptimizedos?viewbox=auto"
            ],
            [
            "title" => "Google Data Studio",
            "slug" => "googledatastudio",
            "url" => "https://cdn.simpleicons.org/googledatastudio?viewbox=auto"
            ],
            [
            "title" => "Google Dataflow",
            "slug" => "googledataflow",
            "url" => "https://cdn.simpleicons.org/googledataflow?viewbox=auto"
            ],
            [
            "title" => "Google Dataproc",
            "slug" => "googledataproc",
            "url" => "https://cdn.simpleicons.org/googledataproc?viewbox=auto"
            ],
            [
            "title" => "Google Display & Video 360",
            "slug" => "googledisplayandvideo360",
            "url" => "https://cdn.simpleicons.org/googledisplayandvideo360?viewbox=auto"
            ],
            [
            "title" => "Google Docs",
            "slug" => "googledocs",
            "url" => "https://cdn.simpleicons.org/googledocs?viewbox=auto"
            ],
            [
            "title" => "Google Domains",
            "slug" => "googledomains",
            "url" => "https://cdn.simpleicons.org/googledomains?viewbox=auto"
            ],
            [
            "title" => "Google Drive",
            "slug" => "googledrive",
            "url" => "https://cdn.simpleicons.org/googledrive?viewbox=auto"
            ],
            [
            "title" => "Google Earth",
            "slug" => "googleearth",
            "url" => "https://cdn.simpleicons.org/googleearth?viewbox=auto"
            ],
            [
            "title" => "Google Earth Engine",
            "slug" => "googleearthengine",
            "url" => "https://cdn.simpleicons.org/googleearthengine?viewbox=auto"
            ],
            [
            "title" => "Google Fit",
            "slug" => "googlefit",
            "url" => "https://cdn.simpleicons.org/googlefit?viewbox=auto"
            ],
            [
            "title" => "Google Fonts",
            "slug" => "googlefonts",
            "url" => "https://cdn.simpleicons.org/googlefonts?viewbox=auto"
            ],
            [
            "title" => "Google Forms",
            "slug" => "googleforms",
            "url" => "https://cdn.simpleicons.org/googleforms?viewbox=auto"
            ],
            [
            "title" => "Google Gemini",
            "slug" => "googlegemini",
            "url" => "https://cdn.simpleicons.org/googlegemini?viewbox=auto"
            ],
            [
            "title" => "Google Hangouts",
            "slug" => "googlehangouts",
            "url" => "https://cdn.simpleicons.org/googlehangouts?viewbox=auto"
            ],
            [
            "title" => "Google Home",
            "slug" => "googlehome",
            "url" => "https://cdn.simpleicons.org/googlehome?viewbox=auto"
            ],
            [
            "title" => "Google Keep",
            "slug" => "googlekeep",
            "url" => "https://cdn.simpleicons.org/googlekeep?viewbox=auto"
            ],
            [
            "title" => "Google Lens",
            "slug" => "googlelens",
            "url" => "https://cdn.simpleicons.org/googlelens?viewbox=auto"
            ],
            [
            "title" => "Google Maps",
            "slug" => "googlemaps",
            "url" => "https://cdn.simpleicons.org/googlemaps?viewbox=auto"
            ],
            [
            "title" => "Google Marketing Platform",
            "slug" => "googlemarketingplatform",
            "url" => "https://cdn.simpleicons.org/googlemarketingplatform?viewbox=auto"
            ],
            [
            "title" => "Google Meet",
            "slug" => "googlemeet",
            "url" => "https://cdn.simpleicons.org/googlemeet?viewbox=auto"
            ],
            [
            "title" => "Google Messages",
            "slug" => "googlemessages",
            "url" => "https://cdn.simpleicons.org/googlemessages?viewbox=auto"
            ],
            [
            "title" => "Google My Business",
            "slug" => "googlemybusiness",
            "url" => "https://cdn.simpleicons.org/googlemybusiness?viewbox=auto"
            ],
            [
            "title" => "Google Nearby",
            "slug" => "googlenearby",
            "url" => "https://cdn.simpleicons.org/googlenearby?viewbox=auto"
            ],
            [
            "title" => "Google News",
            "slug" => "googlenews",
            "url" => "https://cdn.simpleicons.org/googlenews?viewbox=auto"
            ],
            [
            "title" => "Google Optimize",
            "slug" => "googleoptimize",
            "url" => "https://cdn.simpleicons.org/googleoptimize?viewbox=auto"
            ],
            [
            "title" => "Google Pay",
            "slug" => "googlepay",
            "url" => "https://cdn.simpleicons.org/googlepay?viewbox=auto"
            ],
            [
            "title" => "Google Photos",
            "slug" => "googlephotos",
            "url" => "https://cdn.simpleicons.org/googlephotos?viewbox=auto"
            ],
            [
            "title" => "Google Play",
            "slug" => "googleplay",
            "url" => "https://cdn.simpleicons.org/googleplay?viewbox=auto"
            ],
            [
            "title" => "Google Podcasts",
            "slug" => "googlepodcasts",
            "url" => "https://cdn.simpleicons.org/googlepodcasts?viewbox=auto"
            ],
            [
            "title" => "Google Pub/Sub",
            "slug" => "googlepubsub",
            "url" => "https://cdn.simpleicons.org/googlepubsub?viewbox=auto"
            ],
            [
            "title" => "Google Scholar",
            "slug" => "googlescholar",
            "url" => "https://cdn.simpleicons.org/googlescholar?viewbox=auto"
            ],
            [
            "title" => "Google Search Console",
            "slug" => "googlesearchconsole",
            "url" => "https://cdn.simpleicons.org/googlesearchconsole?viewbox=auto"
            ],
            [
            "title" => "Google Sheets",
            "slug" => "googlesheets",
            "url" => "https://cdn.simpleicons.org/googlesheets?viewbox=auto"
            ],
            [
            "title" => "Google Slides",
            "slug" => "googleslides",
            "url" => "https://cdn.simpleicons.org/googleslides?viewbox=auto"
            ],
            [
            "title" => "Google Street View",
            "slug" => "googlestreetview",
            "url" => "https://cdn.simpleicons.org/googlestreetview?viewbox=auto"
            ],
            [
            "title" => "Google Tag Manager",
            "slug" => "googletagmanager",
            "url" => "https://cdn.simpleicons.org/googletagmanager?viewbox=auto"
            ],
            [
            "title" => "Google Tasks",
            "slug" => "googletasks",
            "url" => "https://cdn.simpleicons.org/googletasks?viewbox=auto"
            ],
            [
            "title" => "Google Translate",
            "slug" => "googletranslate",
            "url" => "https://cdn.simpleicons.org/googletranslate?viewbox=auto"
            ],
            [
            "title" => "GoToMeeting",
            "slug" => "gotomeeting",
            "url" => "https://cdn.simpleicons.org/gotomeeting?viewbox=auto"
            ],
            [
            "title" => "Grab",
            "slug" => "grab",
            "url" => "https://cdn.simpleicons.org/grab?viewbox=auto"
            ],
            [
            "title" => "Gradle",
            "slug" => "gradle",
            "url" => "https://cdn.simpleicons.org/gradle?viewbox=auto"
            ],
            [
            "title" => "Gradle Play Publisher",
            "slug" => "gradleplaypublisher",
            "url" => "https://cdn.simpleicons.org/gradleplaypublisher?viewbox=auto"
            ],
            [
            "title" => "Grafana",
            "slug" => "grafana",
            "url" => "https://cdn.simpleicons.org/grafana?viewbox=auto"
            ],
            [
            "title" => "Grammarly",
            "slug" => "grammarly",
            "url" => "https://cdn.simpleicons.org/grammarly?viewbox=auto"
            ],
            [
            "title" => "Grand Frais",
            "slug" => "grandfrais",
            "url" => "https://cdn.simpleicons.org/grandfrais?viewbox=auto"
            ],
            [
            "title" => "GrapheneOS",
            "slug" => "grapheneos",
            "url" => "https://cdn.simpleicons.org/grapheneos?viewbox=auto"
            ],
            [
            "title" => "Graphite",
            "slug" => "graphite",
            "url" => "https://cdn.simpleicons.org/graphite?viewbox=auto"
            ],
            [
            "title" => "GraphQL",
            "slug" => "graphql",
            "url" => "https://cdn.simpleicons.org/graphql?viewbox=auto"
            ],
            [
            "title" => "Grav",
            "slug" => "grav",
            "url" => "https://cdn.simpleicons.org/grav?viewbox=auto"
            ],
            [
            "title" => "Gravatar",
            "slug" => "gravatar",
            "url" => "https://cdn.simpleicons.org/gravatar?viewbox=auto"
            ],
            [
            "title" => "Graylog",
            "slug" => "graylog",
            "url" => "https://cdn.simpleicons.org/graylog?viewbox=auto"
            ],
            [
            "title" => "Greasy Fork",
            "slug" => "greasyfork",
            "url" => "https://cdn.simpleicons.org/greasyfork?viewbox=auto"
            ],
            [
            "title" => "Great Learning",
            "slug" => "greatlearning",
            "url" => "https://cdn.simpleicons.org/greatlearning?viewbox=auto"
            ],
            [
            "title" => "Greenhouse",
            "slug" => "greenhouse",
            "url" => "https://cdn.simpleicons.org/greenhouse?viewbox=auto"
            ],
            [
            "title" => "GreenSock",
            "slug" => "greensock",
            "url" => "https://cdn.simpleicons.org/greensock?viewbox=auto"
            ],
            [
            "title" => "Grid.ai",
            "slug" => "griddotai",
            "url" => "https://cdn.simpleicons.org/griddotai?viewbox=auto"
            ],
            [
            "title" => "Gridsome",
            "slug" => "gridsome",
            "url" => "https://cdn.simpleicons.org/gridsome?viewbox=auto"
            ],
            [
            "title" => "GroupMe",
            "slug" => "groupme",
            "url" => "https://cdn.simpleicons.org/groupme?viewbox=auto"
            ],
            [
            "title" => "Groupon",
            "slug" => "groupon",
            "url" => "https://cdn.simpleicons.org/groupon?viewbox=auto"
            ],
            [
            "title" => "Grubhub",
            "slug" => "grubhub",
            "url" => "https://cdn.simpleicons.org/grubhub?viewbox=auto"
            ],
            [
            "title" => "Grunt",
            "slug" => "grunt",
            "url" => "https://cdn.simpleicons.org/grunt?viewbox=auto"
            ],
            [
            "title" => "GSK",
            "slug" => "gsk",
            "url" => "https://cdn.simpleicons.org/gsk?viewbox=auto"
            ],
            [
            "title" => "GSMArena.com",
            "slug" => "gsmarenadotcom",
            "url" => "https://cdn.simpleicons.org/gsmarenadotcom?viewbox=auto"
            ],
            [
            "title" => "GStreamer",
            "slug" => "gstreamer",
            "url" => "https://cdn.simpleicons.org/gstreamer?viewbox=auto"
            ],
            [
            "title" => "GTK",
            "slug" => "gtk",
            "url" => "https://cdn.simpleicons.org/gtk?viewbox=auto"
            ],
            [
            "title" => "Guangzhou Metro",
            "slug" => "guangzhoumetro",
            "url" => "https://cdn.simpleicons.org/guangzhoumetro?viewbox=auto"
            ],
            [
            "title" => "Guilded",
            "slug" => "guilded",
            "url" => "https://cdn.simpleicons.org/guilded?viewbox=auto"
            ],
            [
            "title" => "gulp",
            "slug" => "gulp",
            "url" => "https://cdn.simpleicons.org/gulp?viewbox=auto"
            ],
            [
            "title" => "Gumroad",
            "slug" => "gumroad",
            "url" => "https://cdn.simpleicons.org/gumroad?viewbox=auto"
            ],
            [
            "title" => "Gumtree",
            "slug" => "gumtree",
            "url" => "https://cdn.simpleicons.org/gumtree?viewbox=auto"
            ],
            [
            "title" => "Gunicorn",
            "slug" => "gunicorn",
            "url" => "https://cdn.simpleicons.org/gunicorn?viewbox=auto"
            ],
            [
            "title" => "Gurobi",
            "slug" => "gurobi",
            "url" => "https://cdn.simpleicons.org/gurobi?viewbox=auto"
            ],
            [
            "title" => "Gutenberg",
            "slug" => "gutenberg",
            "url" => "https://cdn.simpleicons.org/gutenberg?viewbox=auto"
            ],
            [
            "title" => "H&M",
            "slug" => "handm",
            "url" => "https://cdn.simpleicons.org/handm?viewbox=auto"
            ],
            [
            "title" => "H3",
            "slug" => "h3",
            "url" => "https://cdn.simpleicons.org/h3?viewbox=auto"
            ],
            [
            "title" => "Habr",
            "slug" => "habr",
            "url" => "https://cdn.simpleicons.org/habr?viewbox=auto"
            ],
            [
            "title" => "Hack Club",
            "slug" => "hackclub",
            "url" => "https://cdn.simpleicons.org/hackclub?viewbox=auto"
            ],
            [
            "title" => "Hack The Box",
            "slug" => "hackthebox",
            "url" => "https://cdn.simpleicons.org/hackthebox?viewbox=auto"
            ],
            [
            "title" => "Hackaday",
            "slug" => "hackaday",
            "url" => "https://cdn.simpleicons.org/hackaday?viewbox=auto"
            ],
            [
            "title" => "Hacker Noon",
            "slug" => "hackernoon",
            "url" => "https://cdn.simpleicons.org/hackernoon?viewbox=auto"
            ],
            [
            "title" => "HackerEarth",
            "slug" => "hackerearth",
            "url" => "https://cdn.simpleicons.org/hackerearth?viewbox=auto"
            ],
            [
            "title" => "HackerOne",
            "slug" => "hackerone",
            "url" => "https://cdn.simpleicons.org/hackerone?viewbox=auto"
            ],
            [
            "title" => "HackerRank",
            "slug" => "hackerrank",
            "url" => "https://cdn.simpleicons.org/hackerrank?viewbox=auto"
            ],
            [
            "title" => "Hackster",
            "slug" => "hackster",
            "url" => "https://cdn.simpleicons.org/hackster?viewbox=auto"
            ],
            [
            "title" => "HAL",
            "slug" => "hal",
            "url" => "https://cdn.simpleicons.org/hal?viewbox=auto"
            ],
            [
            "title" => "Handlebars.js",
            "slug" => "handlebarsdotjs",
            "url" => "https://cdn.simpleicons.org/handlebarsdotjs?viewbox=auto"
            ],
            [
            "title" => "Handshake",
            "slug" => "handshake",
            "url" => "https://cdn.simpleicons.org/handshake?viewbox=auto"
            ],
            [
            "title" => "Handshake",
            "slug" => "handshake",
            "url" => "https://cdn.simpleicons.org/handshake?viewbox=auto"
            ],
            [
            "title" => "HappyCow",
            "slug" => "happycow",
            "url" => "https://cdn.simpleicons.org/happycow?viewbox=auto"
            ],
            [
            "title" => "Harbor",
            "slug" => "harbor",
            "url" => "https://cdn.simpleicons.org/harbor?viewbox=auto"
            ],
            [
            "title" => "HarmonyOS",
            "slug" => "harmonyos",
            "url" => "https://cdn.simpleicons.org/harmonyos?viewbox=auto"
            ],
            [
            "title" => "HashiCorp",
            "slug" => "hashicorp",
            "url" => "https://cdn.simpleicons.org/hashicorp?viewbox=auto"
            ],
            [
            "title" => "Hashnode",
            "slug" => "hashnode",
            "url" => "https://cdn.simpleicons.org/hashnode?viewbox=auto"
            ],
            [
            "title" => "Haskell",
            "slug" => "haskell",
            "url" => "https://cdn.simpleicons.org/haskell?viewbox=auto"
            ],
            [
            "title" => "Hasura",
            "slug" => "hasura",
            "url" => "https://cdn.simpleicons.org/hasura?viewbox=auto"
            ],
            [
            "title" => "Hatena Bookmark",
            "slug" => "hatenabookmark",
            "url" => "https://cdn.simpleicons.org/hatenabookmark?viewbox=auto"
            ],
            [
            "title" => "haveibeenpwned",
            "slug" => "haveibeenpwned",
            "url" => "https://cdn.simpleicons.org/haveibeenpwned?viewbox=auto"
            ],
            [
            "title" => "Haxe",
            "slug" => "haxe",
            "url" => "https://cdn.simpleicons.org/haxe?viewbox=auto"
            ],
            [
            "title" => "HBO",
            "slug" => "hbo",
            "url" => "https://cdn.simpleicons.org/hbo?viewbox=auto"
            ],
            [
            "title" => "HCL",
            "slug" => "hcl",
            "url" => "https://cdn.simpleicons.org/hcl?viewbox=auto"
            ],
            [
            "title" => "HDFC Bank",
            "slug" => "hdfcbank",
            "url" => "https://cdn.simpleicons.org/hdfcbank?viewbox=auto"
            ],
            [
            "title" => "Headless UI",
            "slug" => "headlessui",
            "url" => "https://cdn.simpleicons.org/headlessui?viewbox=auto"
            ],
            [
            "title" => "Headphone Zone",
            "slug" => "headphonezone",
            "url" => "https://cdn.simpleicons.org/headphonezone?viewbox=auto"
            ],
            [
            "title" => "Headspace",
            "slug" => "headspace",
            "url" => "https://cdn.simpleicons.org/headspace?viewbox=auto"
            ],
            [
            "title" => "Hearth",
            "slug" => "hearth",
            "url" => "https://cdn.simpleicons.org/hearth?viewbox=auto"
            ],
            [
            "title" => "hearthis.at",
            "slug" => "hearthisdotat",
            "url" => "https://cdn.simpleicons.org/hearthisdotat?viewbox=auto"
            ],
            [
            "title" => "Hedera",
            "slug" => "hedera",
            "url" => "https://cdn.simpleicons.org/hedera?viewbox=auto"
            ],
            [
            "title" => "Helium",
            "slug" => "helium",
            "url" => "https://cdn.simpleicons.org/helium?viewbox=auto"
            ],
            [
            "title" => "HelloFresh",
            "slug" => "hellofresh",
            "url" => "https://cdn.simpleicons.org/hellofresh?viewbox=auto"
            ],
            [
            "title" => "Helly Hansen",
            "slug" => "hellyhansen",
            "url" => "https://cdn.simpleicons.org/hellyhansen?viewbox=auto"
            ],
            [
            "title" => "Helm",
            "slug" => "helm",
            "url" => "https://cdn.simpleicons.org/helm?viewbox=auto"
            ],
            [
            "title" => "Help Scout",
            "slug" => "helpscout",
            "url" => "https://cdn.simpleicons.org/helpscout?viewbox=auto"
            ],
            [
            "title" => "HelpDesk",
            "slug" => "helpdesk",
            "url" => "https://cdn.simpleicons.org/helpdesk?viewbox=auto"
            ],
            [
            "title" => "Hepsiemlak",
            "slug" => "hepsiemlak",
            "url" => "https://cdn.simpleicons.org/hepsiemlak?viewbox=auto"
            ],
            [
            "title" => "HERE",
            "slug" => "here",
            "url" => "https://cdn.simpleicons.org/here?viewbox=auto"
            ],
            [
            "title" => "Heroku",
            "slug" => "heroku",
            "url" => "https://cdn.simpleicons.org/heroku?viewbox=auto"
            ],
            [
            "title" => "Hetzner",
            "slug" => "hetzner",
            "url" => "https://cdn.simpleicons.org/hetzner?viewbox=auto"
            ],
            [
            "title" => "Hevy",
            "slug" => "hevy",
            "url" => "https://cdn.simpleicons.org/hevy?viewbox=auto"
            ],
            [
            "title" => "Hexlet",
            "slug" => "hexlet",
            "url" => "https://cdn.simpleicons.org/hexlet?viewbox=auto"
            ],
            [
            "title" => "Hexo",
            "slug" => "hexo",
            "url" => "https://cdn.simpleicons.org/hexo?viewbox=auto"
            ],
            [
            "title" => "HEY",
            "slug" => "hey",
            "url" => "https://cdn.simpleicons.org/hey?viewbox=auto"
            ],
            [
            "title" => "Hi Bob",
            "slug" => "hibob",
            "url" => "https://cdn.simpleicons.org/hibob?viewbox=auto"
            ],
            [
            "title" => "Hibernate",
            "slug" => "hibernate",
            "url" => "https://cdn.simpleicons.org/hibernate?viewbox=auto"
            ],
            [
            "title" => "Hilton",
            "slug" => "hilton",
            "url" => "https://cdn.simpleicons.org/hilton?viewbox=auto"
            ],
            [
            "title" => "Hilton Hotels & Resorts",
            "slug" => "hiltonhotelsandresorts",
            "url" => "https://cdn.simpleicons.org/hiltonhotelsandresorts?viewbox=auto"
            ],
            [
            "title" => "Hitachi",
            "slug" => "hitachi",
            "url" => "https://cdn.simpleicons.org/hitachi?viewbox=auto"
            ],
            [
            "title" => "Hive",
            "slug" => "hive",
            "url" => "https://cdn.simpleicons.org/hive?viewbox=auto"
            ],
            [
            "title" => "Hive",
            "slug" => "hive",
            "url" => "https://cdn.simpleicons.org/hive?viewbox=auto"
            ],
            [
            "title" => "HiveMQ",
            "slug" => "hivemq",
            "url" => "https://cdn.simpleicons.org/hivemq?viewbox=auto"
            ],
            [
            "title" => "Homarr",
            "slug" => "homarr",
            "url" => "https://cdn.simpleicons.org/homarr?viewbox=auto"
            ],
            [
            "title" => "Home Assistant",
            "slug" => "homeassistant",
            "url" => "https://cdn.simpleicons.org/homeassistant?viewbox=auto"
            ],
            [
            "title" => "Home Assistant Community Store",
            "slug" => "homeassistantcommunitystore",
            "url" => "https://cdn.simpleicons.org/homeassistantcommunitystore?viewbox=auto"
            ],
            [
            "title" => "HomeAdvisor",
            "slug" => "homeadvisor",
            "url" => "https://cdn.simpleicons.org/homeadvisor?viewbox=auto"
            ],
            [
            "title" => "Homebrew",
            "slug" => "homebrew",
            "url" => "https://cdn.simpleicons.org/homebrew?viewbox=auto"
            ],
            [
            "title" => "Homebridge",
            "slug" => "homebridge",
            "url" => "https://cdn.simpleicons.org/homebridge?viewbox=auto"
            ],
            [
            "title" => "Homepage",
            "slug" => "homepage",
            "url" => "https://cdn.simpleicons.org/homepage?viewbox=auto"
            ],
            [
            "title" => "homify",
            "slug" => "homify",
            "url" => "https://cdn.simpleicons.org/homify?viewbox=auto"
            ],
            [
            "title" => "Honda",
            "slug" => "honda",
            "url" => "https://cdn.simpleicons.org/honda?viewbox=auto"
            ],
            [
            "title" => "Honey",
            "slug" => "honey",
            "url" => "https://cdn.simpleicons.org/honey?viewbox=auto"
            ],
            [
            "title" => "Hono",
            "slug" => "hono",
            "url" => "https://cdn.simpleicons.org/hono?viewbox=auto"
            ],
            [
            "title" => "Honor",
            "slug" => "honor",
            "url" => "https://cdn.simpleicons.org/honor?viewbox=auto"
            ],
            [
            "title" => "Hootsuite",
            "slug" => "hootsuite",
            "url" => "https://cdn.simpleicons.org/hootsuite?viewbox=auto"
            ],
            [
            "title" => "Hoppscotch",
            "slug" => "hoppscotch",
            "url" => "https://cdn.simpleicons.org/hoppscotch?viewbox=auto"
            ],
            [
            "title" => "Hostinger",
            "slug" => "hostinger",
            "url" => "https://cdn.simpleicons.org/hostinger?viewbox=auto"
            ],
            [
            "title" => "Hotels.com",
            "slug" => "hotelsdotcom",
            "url" => "https://cdn.simpleicons.org/hotelsdotcom?viewbox=auto"
            ],
            [
            "title" => "Hotjar",
            "slug" => "hotjar",
            "url" => "https://cdn.simpleicons.org/hotjar?viewbox=auto"
            ],
            [
            "title" => "Hotwire",
            "slug" => "hotwire",
            "url" => "https://cdn.simpleicons.org/hotwire?viewbox=auto"
            ],
            [
            "title" => "Houdini",
            "slug" => "houdini",
            "url" => "https://cdn.simpleicons.org/houdini?viewbox=auto"
            ],
            [
            "title" => "Houzz",
            "slug" => "houzz",
            "url" => "https://cdn.simpleicons.org/houzz?viewbox=auto"
            ],
            [
            "title" => "HP",
            "slug" => "hp",
            "url" => "https://cdn.simpleicons.org/hp?viewbox=auto"
            ],
            [
            "title" => "HSBC",
            "slug" => "hsbc",
            "url" => "https://cdn.simpleicons.org/hsbc?viewbox=auto"
            ],
            [
            "title" => "HTML Academy",
            "slug" => "htmlacademy",
            "url" => "https://cdn.simpleicons.org/htmlacademy?viewbox=auto"
            ],
            [
            "title" => "HTML5",
            "slug" => "html5",
            "url" => "https://cdn.simpleicons.org/html5?viewbox=auto"
            ],
            [
            "title" => "htmx",
            "slug" => "htmx",
            "url" => "https://cdn.simpleicons.org/htmx?viewbox=auto"
            ],
            [
            "title" => "htop",
            "slug" => "htop",
            "url" => "https://cdn.simpleicons.org/htop?viewbox=auto"
            ],
            [
            "title" => "HTTPie",
            "slug" => "httpie",
            "url" => "https://cdn.simpleicons.org/httpie?viewbox=auto"
            ],
            [
            "title" => "Huawei",
            "slug" => "huawei",
            "url" => "https://cdn.simpleicons.org/huawei?viewbox=auto"
            ],
            [
            "title" => "HubSpot",
            "slug" => "hubspot",
            "url" => "https://cdn.simpleicons.org/hubspot?viewbox=auto"
            ],
            [
            "title" => "Hugging Face",
            "slug" => "huggingface",
            "url" => "https://cdn.simpleicons.org/huggingface?viewbox=auto"
            ],
            [
            "title" => "Hugo",
            "slug" => "hugo",
            "url" => "https://cdn.simpleicons.org/hugo?viewbox=auto"
            ],
            [
            "title" => "Humble Bundle",
            "slug" => "humblebundle",
            "url" => "https://cdn.simpleicons.org/humblebundle?viewbox=auto"
            ],
            [
            "title" => "Hungry Jack's",
            "slug" => "hungryjacks",
            "url" => "https://cdn.simpleicons.org/hungryjacks?viewbox=auto"
            ],
            [
            "title" => "Husqvarna",
            "slug" => "husqvarna",
            "url" => "https://cdn.simpleicons.org/husqvarna?viewbox=auto"
            ],
            [
            "title" => "Hyper",
            "slug" => "hyper",
            "url" => "https://cdn.simpleicons.org/hyper?viewbox=auto"
            ],
            [
            "title" => "Hyperskill",
            "slug" => "hyperskill",
            "url" => "https://cdn.simpleicons.org/hyperskill?viewbox=auto"
            ],
            [
            "title" => "Hypothesis",
            "slug" => "hypothesis",
            "url" => "https://cdn.simpleicons.org/hypothesis?viewbox=auto"
            ],
            [
            "title" => "Hyundai",
            "slug" => "hyundai",
            "url" => "https://cdn.simpleicons.org/hyundai?viewbox=auto"
            ],
            [
            "title" => "i18next",
            "slug" => "i18next",
            "url" => "https://cdn.simpleicons.org/i18next?viewbox=auto"
            ],
            [
            "title" => "i3",
            "slug" => "i3",
            "url" => "https://cdn.simpleicons.org/i3?viewbox=auto"
            ],
            [
            "title" => "Iata",
            "slug" => "iata",
            "url" => "https://cdn.simpleicons.org/iata?viewbox=auto"
            ],
            [
            "title" => "iBeacon",
            "slug" => "ibeacon",
            "url" => "https://cdn.simpleicons.org/ibeacon?viewbox=auto"
            ],
            [
            "title" => "Iberia",
            "slug" => "iberia",
            "url" => "https://cdn.simpleicons.org/iberia?viewbox=auto"
            ],
            [
            "title" => "IBM",
            "slug" => "ibm",
            "url" => "https://cdn.simpleicons.org/ibm?viewbox=auto"
            ],
            [
            "title" => "IBM Cloud",
            "slug" => "ibmcloud",
            "url" => "https://cdn.simpleicons.org/ibmcloud?viewbox=auto"
            ],
            [
            "title" => "IBM Watson",
            "slug" => "ibmwatson",
            "url" => "https://cdn.simpleicons.org/ibmwatson?viewbox=auto"
            ],
            [
            "title" => "Iced",
            "slug" => "iced",
            "url" => "https://cdn.simpleicons.org/iced?viewbox=auto"
            ],
            [
            "title" => "Iceland",
            "slug" => "iceland",
            "url" => "https://cdn.simpleicons.org/iceland?viewbox=auto"
            ],
            [
            "title" => "ICICI Bank",
            "slug" => "icicibank",
            "url" => "https://cdn.simpleicons.org/icicibank?viewbox=auto"
            ],
            [
            "title" => "Icinga",
            "slug" => "icinga",
            "url" => "https://cdn.simpleicons.org/icinga?viewbox=auto"
            ],
            [
            "title" => "iCloud",
            "slug" => "icloud",
            "url" => "https://cdn.simpleicons.org/icloud?viewbox=auto"
            ],
            [
            "title" => "IcoMoon",
            "slug" => "icomoon",
            "url" => "https://cdn.simpleicons.org/icomoon?viewbox=auto"
            ],
            [
            "title" => "ICON",
            "slug" => "icon",
            "url" => "https://cdn.simpleicons.org/icon?viewbox=auto"
            ],
            [
            "title" => "Iconfinder",
            "slug" => "iconfinder",
            "url" => "https://cdn.simpleicons.org/iconfinder?viewbox=auto"
            ],
            [
            "title" => "Iconify",
            "slug" => "iconify",
            "url" => "https://cdn.simpleicons.org/iconify?viewbox=auto"
            ],
            [
            "title" => "IconJar",
            "slug" => "iconjar",
            "url" => "https://cdn.simpleicons.org/iconjar?viewbox=auto"
            ],
            [
            "title" => "Icons8",
            "slug" => "icons8",
            "url" => "https://cdn.simpleicons.org/icons8?viewbox=auto"
            ],
            [
            "title" => "ICQ",
            "slug" => "icq",
            "url" => "https://cdn.simpleicons.org/icq?viewbox=auto"
            ],
            [
            "title" => "IEEE",
            "slug" => "ieee",
            "url" => "https://cdn.simpleicons.org/ieee?viewbox=auto"
            ],
            [
            "title" => "iFixit",
            "slug" => "ifixit",
            "url" => "https://cdn.simpleicons.org/ifixit?viewbox=auto"
            ],
            [
            "title" => "iFood",
            "slug" => "ifood",
            "url" => "https://cdn.simpleicons.org/ifood?viewbox=auto"
            ],
            [
            "title" => "IFTTT",
            "slug" => "ifttt",
            "url" => "https://cdn.simpleicons.org/ifttt?viewbox=auto"
            ],
            [
            "title" => "IGDB",
            "slug" => "igdb",
            "url" => "https://cdn.simpleicons.org/igdb?viewbox=auto"
            ],
            [
            "title" => "IGN",
            "slug" => "ign",
            "url" => "https://cdn.simpleicons.org/ign?viewbox=auto"
            ],
            [
            "title" => "iHeartRadio",
            "slug" => "iheartradio",
            "url" => "https://cdn.simpleicons.org/iheartradio?viewbox=auto"
            ],
            [
            "title" => "IKEA",
            "slug" => "ikea",
            "url" => "https://cdn.simpleicons.org/ikea?viewbox=auto"
            ],
            [
            "title" => "Île-de-France Mobilités",
            "slug" => "iledefrancemobilites",
            "url" => "https://cdn.simpleicons.org/iledefrancemobilites?viewbox=auto"
            ],
            [
            "title" => "Image.sc",
            "slug" => "imagedotsc",
            "url" => "https://cdn.simpleicons.org/imagedotsc?viewbox=auto"
            ],
            [
            "title" => "ImageJ",
            "slug" => "imagej",
            "url" => "https://cdn.simpleicons.org/imagej?viewbox=auto"
            ],
            [
            "title" => "IMDb",
            "slug" => "imdb",
            "url" => "https://cdn.simpleicons.org/imdb?viewbox=auto"
            ],
            [
            "title" => "iMessage",
            "slug" => "imessage",
            "url" => "https://cdn.simpleicons.org/imessage?viewbox=auto"
            ],
            [
            "title" => "Imgur",
            "slug" => "imgur",
            "url" => "https://cdn.simpleicons.org/imgur?viewbox=auto"
            ],
            [
            "title" => "Immer",
            "slug" => "immer",
            "url" => "https://cdn.simpleicons.org/immer?viewbox=auto"
            ],
            [
            "title" => "Immich",
            "slug" => "immich",
            "url" => "https://cdn.simpleicons.org/immich?viewbox=auto"
            ],
            [
            "title" => "Imou",
            "slug" => "imou",
            "url" => "https://cdn.simpleicons.org/imou?viewbox=auto"
            ],
            [
            "title" => "ImprovMX",
            "slug" => "improvmx",
            "url" => "https://cdn.simpleicons.org/improvmx?viewbox=auto"
            ],
            [
            "title" => "Indeed",
            "slug" => "indeed",
            "url" => "https://cdn.simpleicons.org/indeed?viewbox=auto"
            ],
            [
            "title" => "Indian Super League",
            "slug" => "indiansuperleague",
            "url" => "https://cdn.simpleicons.org/indiansuperleague?viewbox=auto"
            ],
            [
            "title" => "Indie Hackers",
            "slug" => "indiehackers",
            "url" => "https://cdn.simpleicons.org/indiehackers?viewbox=auto"
            ],
            [
            "title" => "IndiGo",
            "slug" => "indigo",
            "url" => "https://cdn.simpleicons.org/indigo?viewbox=auto"
            ],
            [
            "title" => "Inertia",
            "slug" => "inertia",
            "url" => "https://cdn.simpleicons.org/inertia?viewbox=auto"
            ],
            [
            "title" => "INFINITI",
            "slug" => "infiniti",
            "url" => "https://cdn.simpleicons.org/infiniti?viewbox=auto"
            ],
            [
            "title" => "InfluxDB",
            "slug" => "influxdb",
            "url" => "https://cdn.simpleicons.org/influxdb?viewbox=auto"
            ],
            [
            "title" => "Infomaniak",
            "slug" => "infomaniak",
            "url" => "https://cdn.simpleicons.org/infomaniak?viewbox=auto"
            ],
            [
            "title" => "InfoQ",
            "slug" => "infoq",
            "url" => "https://cdn.simpleicons.org/infoq?viewbox=auto"
            ],
            [
            "title" => "Informatica",
            "slug" => "informatica",
            "url" => "https://cdn.simpleicons.org/informatica?viewbox=auto"
            ],
            [
            "title" => "Infosys",
            "slug" => "infosys",
            "url" => "https://cdn.simpleicons.org/infosys?viewbox=auto"
            ],
            [
            "title" => "Infracost",
            "slug" => "infracost",
            "url" => "https://cdn.simpleicons.org/infracost?viewbox=auto"
            ],
            [
            "title" => "Ingress",
            "slug" => "ingress",
            "url" => "https://cdn.simpleicons.org/ingress?viewbox=auto"
            ],
            [
            "title" => "Inkdrop",
            "slug" => "inkdrop",
            "url" => "https://cdn.simpleicons.org/inkdrop?viewbox=auto"
            ],
            [
            "title" => "Inkscape",
            "slug" => "inkscape",
            "url" => "https://cdn.simpleicons.org/inkscape?viewbox=auto"
            ],
            [
            "title" => "Inoreader",
            "slug" => "inoreader",
            "url" => "https://cdn.simpleicons.org/inoreader?viewbox=auto"
            ],
            [
            "title" => "Insomnia",
            "slug" => "insomnia",
            "url" => "https://cdn.simpleicons.org/insomnia?viewbox=auto"
            ],
            [
            "title" => "INSPIRE",
            "slug" => "inspire",
            "url" => "https://cdn.simpleicons.org/inspire?viewbox=auto"
            ],
            [
            "title" => "Insta360",
            "slug" => "insta360",
            "url" => "https://cdn.simpleicons.org/insta360?viewbox=auto"
            ],
            [
            "title" => "Instacart",
            "slug" => "instacart",
            "url" => "https://cdn.simpleicons.org/instacart?viewbox=auto"
            ],
            [
            "title" => "Instagram",
            "slug" => "instagram",
            "url" => "https://cdn.simpleicons.org/instagram?viewbox=auto"
            ],
            [
            "title" => "Instapaper",
            "slug" => "instapaper",
            "url" => "https://cdn.simpleicons.org/instapaper?viewbox=auto"
            ],
            [
            "title" => "Instatus",
            "slug" => "instatus",
            "url" => "https://cdn.simpleicons.org/instatus?viewbox=auto"
            ],
            [
            "title" => "Instructables",
            "slug" => "instructables",
            "url" => "https://cdn.simpleicons.org/instructables?viewbox=auto"
            ],
            [
            "title" => "Instructure",
            "slug" => "instructure",
            "url" => "https://cdn.simpleicons.org/instructure?viewbox=auto"
            ],
            [
            "title" => "Intel",
            "slug" => "intel",
            "url" => "https://cdn.simpleicons.org/intel?viewbox=auto"
            ],
            [
            "title" => "IntelliJ IDEA",
            "slug" => "intellijidea",
            "url" => "https://cdn.simpleicons.org/intellijidea?viewbox=auto"
            ],
            [
            "title" => "Interaction Design Foundation",
            "slug" => "interactiondesignfoundation",
            "url" => "https://cdn.simpleicons.org/interactiondesignfoundation?viewbox=auto"
            ],
            [
            "title" => "InteractJS",
            "slug" => "interactjs",
            "url" => "https://cdn.simpleicons.org/interactjs?viewbox=auto"
            ],
            [
            "title" => "Interbase",
            "slug" => "interbase",
            "url" => "https://cdn.simpleicons.org/interbase?viewbox=auto"
            ],
            [
            "title" => "Intercom",
            "slug" => "intercom",
            "url" => "https://cdn.simpleicons.org/intercom?viewbox=auto"
            ],
            [
            "title" => "Intermarche",
            "slug" => "intermarche",
            "url" => "https://cdn.simpleicons.org/intermarche?viewbox=auto"
            ],
            [
            "title" => "Internet Archive",
            "slug" => "internetarchive",
            "url" => "https://cdn.simpleicons.org/internetarchive?viewbox=auto"
            ],
            [
            "title" => "Internet Computer",
            "slug" => "internetcomputer",
            "url" => "https://cdn.simpleicons.org/internetcomputer?viewbox=auto"
            ],
            [
            "title" => "Internet Explorer",
            "slug" => "internetexplorer",
            "url" => "https://cdn.simpleicons.org/internetexplorer?viewbox=auto"
            ],
            [
            "title" => "Intigriti",
            "slug" => "intigriti",
            "url" => "https://cdn.simpleicons.org/intigriti?viewbox=auto"
            ],
            [
            "title" => "Intuit",
            "slug" => "intuit",
            "url" => "https://cdn.simpleicons.org/intuit?viewbox=auto"
            ],
            [
            "title" => "InVision",
            "slug" => "invision",
            "url" => "https://cdn.simpleicons.org/invision?viewbox=auto"
            ],
            [
            "title" => "Invoice Ninja",
            "slug" => "invoiceninja",
            "url" => "https://cdn.simpleicons.org/invoiceninja?viewbox=auto"
            ],
            [
            "title" => "ioBroker",
            "slug" => "iobroker",
            "url" => "https://cdn.simpleicons.org/iobroker?viewbox=auto"
            ],
            [
            "title" => "Ionic",
            "slug" => "ionic",
            "url" => "https://cdn.simpleicons.org/ionic?viewbox=auto"
            ],
            [
            "title" => "Ionos",
            "slug" => "ionos",
            "url" => "https://cdn.simpleicons.org/ionos?viewbox=auto"
            ],
            [
            "title" => "iOS",
            "slug" => "ios",
            "url" => "https://cdn.simpleicons.org/ios?viewbox=auto"
            ],
            [
            "title" => "IOTA",
            "slug" => "iota",
            "url" => "https://cdn.simpleicons.org/iota?viewbox=auto"
            ],
            [
            "title" => "IPFS",
            "slug" => "ipfs",
            "url" => "https://cdn.simpleicons.org/ipfs?viewbox=auto"
            ],
            [
            "title" => "IRIS",
            "slug" => "iris",
            "url" => "https://cdn.simpleicons.org/iris?viewbox=auto"
            ],
            [
            "title" => "iRobot",
            "slug" => "irobot",
            "url" => "https://cdn.simpleicons.org/irobot?viewbox=auto"
            ],
            [
            "title" => "ISC2",
            "slug" => "isc2",
            "url" => "https://cdn.simpleicons.org/isc2?viewbox=auto"
            ],
            [
            "title" => "Issuu",
            "slug" => "issuu",
            "url" => "https://cdn.simpleicons.org/issuu?viewbox=auto"
            ],
            [
            "title" => "Istio",
            "slug" => "istio",
            "url" => "https://cdn.simpleicons.org/istio?viewbox=auto"
            ],
            [
            "title" => "Itch.io",
            "slug" => "itchdotio",
            "url" => "https://cdn.simpleicons.org/itchdotio?viewbox=auto"
            ],
            [
            "title" => "iTerm2",
            "slug" => "iterm2",
            "url" => "https://cdn.simpleicons.org/iterm2?viewbox=auto"
            ],
            [
            "title" => "iTunes",
            "slug" => "itunes",
            "url" => "https://cdn.simpleicons.org/itunes?viewbox=auto"
            ],
            [
            "title" => "ITVx",
            "slug" => "itvx",
            "url" => "https://cdn.simpleicons.org/itvx?viewbox=auto"
            ],
            [
            "title" => "IVECO",
            "slug" => "iveco",
            "url" => "https://cdn.simpleicons.org/iveco?viewbox=auto"
            ],
            [
            "title" => "Jabber",
            "slug" => "jabber",
            "url" => "https://cdn.simpleicons.org/jabber?viewbox=auto"
            ],
            [
            "title" => "Jaeger",
            "slug" => "jaeger",
            "url" => "https://cdn.simpleicons.org/jaeger?viewbox=auto"
            ],
            [
            "title" => "Jaguar",
            "slug" => "jaguar",
            "url" => "https://cdn.simpleicons.org/jaguar?viewbox=auto"
            ],
            [
            "title" => "Jamboard",
            "slug" => "jamboard",
            "url" => "https://cdn.simpleicons.org/jamboard?viewbox=auto"
            ],
            [
            "title" => "Jameson",
            "slug" => "jameson",
            "url" => "https://cdn.simpleicons.org/jameson?viewbox=auto"
            ],
            [
            "title" => "Jamstack",
            "slug" => "jamstack",
            "url" => "https://cdn.simpleicons.org/jamstack?viewbox=auto"
            ],
            [
            "title" => "Jasmine",
            "slug" => "jasmine",
            "url" => "https://cdn.simpleicons.org/jasmine?viewbox=auto"
            ],
            [
            "title" => "JavaScript",
            "slug" => "javascript",
            "url" => "https://cdn.simpleicons.org/javascript?viewbox=auto"
            ],
            [
            "title" => "JBL",
            "slug" => "jbl",
            "url" => "https://cdn.simpleicons.org/jbl?viewbox=auto"
            ],
            [
            "title" => "JCB",
            "slug" => "jcb",
            "url" => "https://cdn.simpleicons.org/jcb?viewbox=auto"
            ],
            [
            "title" => "Jeep",
            "slug" => "jeep",
            "url" => "https://cdn.simpleicons.org/jeep?viewbox=auto"
            ],
            [
            "title" => "Jekyll",
            "slug" => "jekyll",
            "url" => "https://cdn.simpleicons.org/jekyll?viewbox=auto"
            ],
            [
            "title" => "Jellyfin",
            "slug" => "jellyfin",
            "url" => "https://cdn.simpleicons.org/jellyfin?viewbox=auto"
            ],
            [
            "title" => "Jenkins",
            "slug" => "jenkins",
            "url" => "https://cdn.simpleicons.org/jenkins?viewbox=auto"
            ],
            [
            "title" => "Jest",
            "slug" => "jest",
            "url" => "https://cdn.simpleicons.org/jest?viewbox=auto"
            ],
            [
            "title" => "JET",
            "slug" => "jet",
            "url" => "https://cdn.simpleicons.org/jet?viewbox=auto"
            ],
            [
            "title" => "JetBlue",
            "slug" => "jetblue",
            "url" => "https://cdn.simpleicons.org/jetblue?viewbox=auto"
            ],
            [
            "title" => "JetBrains",
            "slug" => "jetbrains",
            "url" => "https://cdn.simpleicons.org/jetbrains?viewbox=auto"
            ],
            [
            "title" => "Jetpack Compose",
            "slug" => "jetpackcompose",
            "url" => "https://cdn.simpleicons.org/jetpackcompose?viewbox=auto"
            ],
            [
            "title" => "JFrog",
            "slug" => "jfrog",
            "url" => "https://cdn.simpleicons.org/jfrog?viewbox=auto"
            ],
            [
            "title" => "JFrog Pipelines",
            "slug" => "jfrogpipelines",
            "url" => "https://cdn.simpleicons.org/jfrogpipelines?viewbox=auto"
            ],
            [
            "title" => "JHipster",
            "slug" => "jhipster",
            "url" => "https://cdn.simpleicons.org/jhipster?viewbox=auto"
            ],
            [
            "title" => "Jinja",
            "slug" => "jinja",
            "url" => "https://cdn.simpleicons.org/jinja?viewbox=auto"
            ],
            [
            "title" => "Jira",
            "slug" => "jira",
            "url" => "https://cdn.simpleicons.org/jira?viewbox=auto"
            ],
            [
            "title" => "Jira Software",
            "slug" => "jirasoftware",
            "url" => "https://cdn.simpleicons.org/jirasoftware?viewbox=auto"
            ],
            [
            "title" => "JitPack",
            "slug" => "jitpack",
            "url" => "https://cdn.simpleicons.org/jitpack?viewbox=auto"
            ],
            [
            "title" => "Jitsi",
            "slug" => "jitsi",
            "url" => "https://cdn.simpleicons.org/jitsi?viewbox=auto"
            ],
            [
            "title" => "John Deere",
            "slug" => "johndeere",
            "url" => "https://cdn.simpleicons.org/johndeere?viewbox=auto"
            ],
            [
            "title" => "Joomla",
            "slug" => "joomla",
            "url" => "https://cdn.simpleicons.org/joomla?viewbox=auto"
            ],
            [
            "title" => "Joplin",
            "slug" => "joplin",
            "url" => "https://cdn.simpleicons.org/joplin?viewbox=auto"
            ],
            [
            "title" => "Jordan",
            "slug" => "jordan",
            "url" => "https://cdn.simpleicons.org/jordan?viewbox=auto"
            ],
            [
            "title" => "JOUAV",
            "slug" => "jouav",
            "url" => "https://cdn.simpleicons.org/jouav?viewbox=auto"
            ],
            [
            "title" => "Jovian",
            "slug" => "jovian",
            "url" => "https://cdn.simpleicons.org/jovian?viewbox=auto"
            ],
            [
            "title" => "JPEG",
            "slug" => "jpeg",
            "url" => "https://cdn.simpleicons.org/jpeg?viewbox=auto"
            ],
            [
            "title" => "jQuery",
            "slug" => "jquery",
            "url" => "https://cdn.simpleicons.org/jquery?viewbox=auto"
            ],
            [
            "title" => "JR Group",
            "slug" => "jrgroup",
            "url" => "https://cdn.simpleicons.org/jrgroup?viewbox=auto"
            ],
            [
            "title" => "jsDelivr",
            "slug" => "jsdelivr",
            "url" => "https://cdn.simpleicons.org/jsdelivr?viewbox=auto"
            ],
            [
            "title" => "JSFiddle",
            "slug" => "jsfiddle",
            "url" => "https://cdn.simpleicons.org/jsfiddle?viewbox=auto"
            ],
            [
            "title" => "JSON",
            "slug" => "json",
            "url" => "https://cdn.simpleicons.org/json?viewbox=auto"
            ],
            [
            "title" => "JSON Web Tokens",
            "slug" => "jsonwebtokens",
            "url" => "https://cdn.simpleicons.org/jsonwebtokens?viewbox=auto"
            ],
            [
            "title" => "JSR",
            "slug" => "jsr",
            "url" => "https://cdn.simpleicons.org/jsr?viewbox=auto"
            ],
            [
            "title" => "JSS",
            "slug" => "jss",
            "url" => "https://cdn.simpleicons.org/jss?viewbox=auto"
            ],
            [
            "title" => "JUCE",
            "slug" => "juce",
            "url" => "https://cdn.simpleicons.org/juce?viewbox=auto"
            ],
            [
            "title" => "Juejin",
            "slug" => "juejin",
            "url" => "https://cdn.simpleicons.org/juejin?viewbox=auto"
            ],
            [
            "title" => "JUKE",
            "slug" => "juke",
            "url" => "https://cdn.simpleicons.org/juke?viewbox=auto"
            ],
            [
            "title" => "Julia",
            "slug" => "julia",
            "url" => "https://cdn.simpleicons.org/julia?viewbox=auto"
            ],
            [
            "title" => "Juniper Networks",
            "slug" => "junipernetworks",
            "url" => "https://cdn.simpleicons.org/junipernetworks?viewbox=auto"
            ],
            [
            "title" => "JUnit5",
            "slug" => "junit5",
            "url" => "https://cdn.simpleicons.org/junit5?viewbox=auto"
            ],
            [
            "title" => "Jupyter",
            "slug" => "jupyter",
            "url" => "https://cdn.simpleicons.org/jupyter?viewbox=auto"
            ],
            [
            "title" => "Just Eat",
            "slug" => "justeat",
            "url" => "https://cdn.simpleicons.org/justeat?viewbox=auto"
            ],
            [
            "title" => "JustGiving",
            "slug" => "justgiving",
            "url" => "https://cdn.simpleicons.org/justgiving?viewbox=auto"
            ],
            [
            "title" => "K3s",
            "slug" => "k3s",
            "url" => "https://cdn.simpleicons.org/k3s?viewbox=auto"
            ],
            [
            "title" => "k6",
            "slug" => "k6",
            "url" => "https://cdn.simpleicons.org/k6?viewbox=auto"
            ],
            [
            "title" => "Kaggle",
            "slug" => "kaggle",
            "url" => "https://cdn.simpleicons.org/kaggle?viewbox=auto"
            ],
            [
            "title" => "Kagi",
            "slug" => "kagi",
            "url" => "https://cdn.simpleicons.org/kagi?viewbox=auto"
            ],
            [
            "title" => "Kahoot!",
            "slug" => "kahoot",
            "url" => "https://cdn.simpleicons.org/kahoot?viewbox=auto"
            ],
            [
            "title" => "KaiOS",
            "slug" => "kaios",
            "url" => "https://cdn.simpleicons.org/kaios?viewbox=auto"
            ],
            [
            "title" => "Kakao",
            "slug" => "kakao",
            "url" => "https://cdn.simpleicons.org/kakao?viewbox=auto"
            ],
            [
            "title" => "KakaoTalk",
            "slug" => "kakaotalk",
            "url" => "https://cdn.simpleicons.org/kakaotalk?viewbox=auto"
            ],
            [
            "title" => "Kali Linux",
            "slug" => "kalilinux",
            "url" => "https://cdn.simpleicons.org/kalilinux?viewbox=auto"
            ],
            [
            "title" => "Kamailio",
            "slug" => "kamailio",
            "url" => "https://cdn.simpleicons.org/kamailio?viewbox=auto"
            ],
            [
            "title" => "Kaniko",
            "slug" => "kaniko",
            "url" => "https://cdn.simpleicons.org/kaniko?viewbox=auto"
            ],
            [
            "title" => "Karlsruher Verkehrsverbund",
            "slug" => "karlsruherverkehrsverbund",
            "url" => "https://cdn.simpleicons.org/karlsruherverkehrsverbund?viewbox=auto"
            ],
            [
            "title" => "Kasa Smart",
            "slug" => "kasasmart",
            "url" => "https://cdn.simpleicons.org/kasasmart?viewbox=auto"
            ],
            [
            "title" => "KashFlow",
            "slug" => "kashflow",
            "url" => "https://cdn.simpleicons.org/kashflow?viewbox=auto"
            ],
            [
            "title" => "Kaspersky",
            "slug" => "kaspersky",
            "url" => "https://cdn.simpleicons.org/kaspersky?viewbox=auto"
            ],
            [
            "title" => "Katacoda",
            "slug" => "katacoda",
            "url" => "https://cdn.simpleicons.org/katacoda?viewbox=auto"
            ],
            [
            "title" => "Katana",
            "slug" => "katana",
            "url" => "https://cdn.simpleicons.org/katana?viewbox=auto"
            ],
            [
            "title" => "Kaufland",
            "slug" => "kaufland",
            "url" => "https://cdn.simpleicons.org/kaufland?viewbox=auto"
            ],
            [
            "title" => "KDE",
            "slug" => "kde",
            "url" => "https://cdn.simpleicons.org/kde?viewbox=auto"
            ],
            [
            "title" => "Kdenlive",
            "slug" => "kdenlive",
            "url" => "https://cdn.simpleicons.org/kdenlive?viewbox=auto"
            ],
            [
            "title" => "Kedro",
            "slug" => "kedro",
            "url" => "https://cdn.simpleicons.org/kedro?viewbox=auto"
            ],
            [
            "title" => "Keenetic",
            "slug" => "keenetic",
            "url" => "https://cdn.simpleicons.org/keenetic?viewbox=auto"
            ],
            [
            "title" => "Keep a Changelog",
            "slug" => "keepachangelog",
            "url" => "https://cdn.simpleicons.org/keepachangelog?viewbox=auto"
            ],
            [
            "title" => "KeePassXC",
            "slug" => "keepassxc",
            "url" => "https://cdn.simpleicons.org/keepassxc?viewbox=auto"
            ],
            [
            "title" => "Kentico",
            "slug" => "kentico",
            "url" => "https://cdn.simpleicons.org/kentico?viewbox=auto"
            ],
            [
            "title" => "Keras",
            "slug" => "keras",
            "url" => "https://cdn.simpleicons.org/keras?viewbox=auto"
            ],
            [
            "title" => "Keybase",
            "slug" => "keybase",
            "url" => "https://cdn.simpleicons.org/keybase?viewbox=auto"
            ],
            [
            "title" => "KeyCDN",
            "slug" => "keycdn",
            "url" => "https://cdn.simpleicons.org/keycdn?viewbox=auto"
            ],
            [
            "title" => "Keycloak",
            "slug" => "keycloak",
            "url" => "https://cdn.simpleicons.org/keycloak?viewbox=auto"
            ],
            [
            "title" => "Keystone",
            "slug" => "keystone",
            "url" => "https://cdn.simpleicons.org/keystone?viewbox=auto"
            ],
            [
            "title" => "KFC",
            "slug" => "kfc",
            "url" => "https://cdn.simpleicons.org/kfc?viewbox=auto"
            ],
            [
            "title" => "Khan Academy",
            "slug" => "khanacademy",
            "url" => "https://cdn.simpleicons.org/khanacademy?viewbox=auto"
            ],
            [
            "title" => "Khronos Group",
            "slug" => "khronosgroup",
            "url" => "https://cdn.simpleicons.org/khronosgroup?viewbox=auto"
            ],
            [
            "title" => "Kia",
            "slug" => "kia",
            "url" => "https://cdn.simpleicons.org/kia?viewbox=auto"
            ],
            [
            "title" => "Kibana",
            "slug" => "kibana",
            "url" => "https://cdn.simpleicons.org/kibana?viewbox=auto"
            ],
            [
            "title" => "KiCad",
            "slug" => "kicad",
            "url" => "https://cdn.simpleicons.org/kicad?viewbox=auto"
            ],
            [
            "title" => "Kick",
            "slug" => "kick",
            "url" => "https://cdn.simpleicons.org/kick?viewbox=auto"
            ],
            [
            "title" => "Kickstarter",
            "slug" => "kickstarter",
            "url" => "https://cdn.simpleicons.org/kickstarter?viewbox=auto"
            ],
            [
            "title" => "Kik",
            "slug" => "kik",
            "url" => "https://cdn.simpleicons.org/kik?viewbox=auto"
            ],
            [
            "title" => "Kingston Technology",
            "slug" => "kingstontechnology",
            "url" => "https://cdn.simpleicons.org/kingstontechnology?viewbox=auto"
            ],
            [
            "title" => "Kinopoisk",
            "slug" => "kinopoisk",
            "url" => "https://cdn.simpleicons.org/kinopoisk?viewbox=auto"
            ],
            [
            "title" => "Kinsta",
            "slug" => "kinsta",
            "url" => "https://cdn.simpleicons.org/kinsta?viewbox=auto"
            ],
            [
            "title" => "Kirby",
            "slug" => "kirby",
            "url" => "https://cdn.simpleicons.org/kirby?viewbox=auto"
            ],
            [
            "title" => "Kit",
            "slug" => "kit",
            "url" => "https://cdn.simpleicons.org/kit?viewbox=auto"
            ],
            [
            "title" => "Kitsu",
            "slug" => "kitsu",
            "url" => "https://cdn.simpleicons.org/kitsu?viewbox=auto"
            ],
            [
            "title" => "Klarna",
            "slug" => "klarna",
            "url" => "https://cdn.simpleicons.org/klarna?viewbox=auto"
            ],
            [
            "title" => "KLM",
            "slug" => "klm",
            "url" => "https://cdn.simpleicons.org/klm?viewbox=auto"
            ],
            [
            "title" => "Klook",
            "slug" => "klook",
            "url" => "https://cdn.simpleicons.org/klook?viewbox=auto"
            ],
            [
            "title" => "Knative",
            "slug" => "knative",
            "url" => "https://cdn.simpleicons.org/knative?viewbox=auto"
            ],
            [
            "title" => "Knex.js",
            "slug" => "knexdotjs",
            "url" => "https://cdn.simpleicons.org/knexdotjs?viewbox=auto"
            ],
            [
            "title" => "KNIME",
            "slug" => "knime",
            "url" => "https://cdn.simpleicons.org/knime?viewbox=auto"
            ],
            [
            "title" => "Knip",
            "slug" => "knip",
            "url" => "https://cdn.simpleicons.org/knip?viewbox=auto"
            ],
            [
            "title" => "KnowledgeBase",
            "slug" => "knowledgebase",
            "url" => "https://cdn.simpleicons.org/knowledgebase?viewbox=auto"
            ],
            [
            "title" => "Known",
            "slug" => "known",
            "url" => "https://cdn.simpleicons.org/known?viewbox=auto"
            ],
            [
            "title" => "Ko-fi",
            "slug" => "kofi",
            "url" => "https://cdn.simpleicons.org/kofi?viewbox=auto"
            ],
            [
            "title" => "Koa",
            "slug" => "koa",
            "url" => "https://cdn.simpleicons.org/koa?viewbox=auto"
            ],
            [
            "title" => "Koc",
            "slug" => "koc",
            "url" => "https://cdn.simpleicons.org/koc?viewbox=auto"
            ],
            [
            "title" => "Kodak",
            "slug" => "kodak",
            "url" => "https://cdn.simpleicons.org/kodak?viewbox=auto"
            ],
            [
            "title" => "Kodi",
            "slug" => "kodi",
            "url" => "https://cdn.simpleicons.org/kodi?viewbox=auto"
            ],
            [
            "title" => "Kofax",
            "slug" => "kofax",
            "url" => "https://cdn.simpleicons.org/kofax?viewbox=auto"
            ],
            [
            "title" => "Komoot",
            "slug" => "komoot",
            "url" => "https://cdn.simpleicons.org/komoot?viewbox=auto"
            ],
            [
            "title" => "Konami",
            "slug" => "konami",
            "url" => "https://cdn.simpleicons.org/konami?viewbox=auto"
            ],
            [
            "title" => "Kong",
            "slug" => "kong",
            "url" => "https://cdn.simpleicons.org/kong?viewbox=auto"
            ],
            [
            "title" => "Kongregate",
            "slug" => "kongregate",
            "url" => "https://cdn.simpleicons.org/kongregate?viewbox=auto"
            ],
            [
            "title" => "Konva",
            "slug" => "konva",
            "url" => "https://cdn.simpleicons.org/konva?viewbox=auto"
            ],
            [
            "title" => "Kotlin",
            "slug" => "kotlin",
            "url" => "https://cdn.simpleicons.org/kotlin?viewbox=auto"
            ],
            [
            "title" => "Koyeb",
            "slug" => "koyeb",
            "url" => "https://cdn.simpleicons.org/koyeb?viewbox=auto"
            ],
            [
            "title" => "Krita",
            "slug" => "krita",
            "url" => "https://cdn.simpleicons.org/krita?viewbox=auto"
            ],
            [
            "title" => "KTM",
            "slug" => "ktm",
            "url" => "https://cdn.simpleicons.org/ktm?viewbox=auto"
            ],
            [
            "title" => "Ktor",
            "slug" => "ktor",
            "url" => "https://cdn.simpleicons.org/ktor?viewbox=auto"
            ],
            [
            "title" => "Kuaishou",
            "slug" => "kuaishou",
            "url" => "https://cdn.simpleicons.org/kuaishou?viewbox=auto"
            ],
            [
            "title" => "Kubernetes",
            "slug" => "kubernetes",
            "url" => "https://cdn.simpleicons.org/kubernetes?viewbox=auto"
            ],
            [
            "title" => "Kubuntu",
            "slug" => "kubuntu",
            "url" => "https://cdn.simpleicons.org/kubuntu?viewbox=auto"
            ],
            [
            "title" => "KuCoin",
            "slug" => "kucoin",
            "url" => "https://cdn.simpleicons.org/kucoin?viewbox=auto"
            ],
            [
            "title" => "Kuma",
            "slug" => "kuma",
            "url" => "https://cdn.simpleicons.org/kuma?viewbox=auto"
            ],
            [
            "title" => "Kununu",
            "slug" => "kununu",
            "url" => "https://cdn.simpleicons.org/kununu?viewbox=auto"
            ],
            [
            "title" => "Kuula",
            "slug" => "kuula",
            "url" => "https://cdn.simpleicons.org/kuula?viewbox=auto"
            ],
            [
            "title" => "KX",
            "slug" => "kx",
            "url" => "https://cdn.simpleicons.org/kx?viewbox=auto"
            ],
            [
            "title" => "Kyocera",
            "slug" => "kyocera",
            "url" => "https://cdn.simpleicons.org/kyocera?viewbox=auto"
            ],
            [
            "title" => "L'Équipe",
            "slug" => "lequipe",
            "url" => "https://cdn.simpleicons.org/lequipe?viewbox=auto"
            ],
            [
            "title" => "LabVIEW",
            "slug" => "labview",
            "url" => "https://cdn.simpleicons.org/labview?viewbox=auto"
            ],
            [
            "title" => "LADA",
            "slug" => "lada",
            "url" => "https://cdn.simpleicons.org/lada?viewbox=auto"
            ],
            [
            "title" => "Lamborghini",
            "slug" => "lamborghini",
            "url" => "https://cdn.simpleicons.org/lamborghini?viewbox=auto"
            ],
            [
            "title" => "Land Rover",
            "slug" => "landrover",
            "url" => "https://cdn.simpleicons.org/landrover?viewbox=auto"
            ],
            [
            "title" => "Lapce",
            "slug" => "lapce",
            "url" => "https://cdn.simpleicons.org/lapce?viewbox=auto"
            ],
            [
            "title" => "Laragon",
            "slug" => "laragon",
            "url" => "https://cdn.simpleicons.org/laragon?viewbox=auto"
            ],
            [
            "title" => "Laravel",
            "slug" => "laravel",
            "url" => "https://cdn.simpleicons.org/laravel?viewbox=auto"
            ],
            [
            "title" => "Laravel Horizon",
            "slug" => "laravelhorizon",
            "url" => "https://cdn.simpleicons.org/laravelhorizon?viewbox=auto"
            ],
            [
            "title" => "Laravel Nova",
            "slug" => "laravelnova",
            "url" => "https://cdn.simpleicons.org/laravelnova?viewbox=auto"
            ],
            [
            "title" => "Last.fm",
            "slug" => "lastdotfm",
            "url" => "https://cdn.simpleicons.org/lastdotfm?viewbox=auto"
            ],
            [
            "title" => "LastPass",
            "slug" => "lastpass",
            "url" => "https://cdn.simpleicons.org/lastpass?viewbox=auto"
            ],
            [
            "title" => "LaTeX",
            "slug" => "latex",
            "url" => "https://cdn.simpleicons.org/latex?viewbox=auto"
            ],
            [
            "title" => "Launchpad",
            "slug" => "launchpad",
            "url" => "https://cdn.simpleicons.org/launchpad?viewbox=auto"
            ],
            [
            "title" => "Lazarus",
            "slug" => "lazarus",
            "url" => "https://cdn.simpleicons.org/lazarus?viewbox=auto"
            ],
            [
            "title" => "LazyVim",
            "slug" => "lazyvim",
            "url" => "https://cdn.simpleicons.org/lazyvim?viewbox=auto"
            ],
            [
            "title" => "LBRY",
            "slug" => "lbry",
            "url" => "https://cdn.simpleicons.org/lbry?viewbox=auto"
            ],
            [
            "title" => "Leader Price",
            "slug" => "leaderprice",
            "url" => "https://cdn.simpleicons.org/leaderprice?viewbox=auto"
            ],
            [
            "title" => "Leaflet",
            "slug" => "leaflet",
            "url" => "https://cdn.simpleicons.org/leaflet?viewbox=auto"
            ],
            [
            "title" => "League of Legends",
            "slug" => "leagueoflegends",
            "url" => "https://cdn.simpleicons.org/leagueoflegends?viewbox=auto"
            ],
            [
            "title" => "Leanpub",
            "slug" => "leanpub",
            "url" => "https://cdn.simpleicons.org/leanpub?viewbox=auto"
            ],
            [
            "title" => "LeetCode",
            "slug" => "leetcode",
            "url" => "https://cdn.simpleicons.org/leetcode?viewbox=auto"
            ],
            [
            "title" => "Legacy Games",
            "slug" => "legacygames",
            "url" => "https://cdn.simpleicons.org/legacygames?viewbox=auto"
            ],
            [
            "title" => "Leica",
            "slug" => "leica",
            "url" => "https://cdn.simpleicons.org/leica?viewbox=auto"
            ],
            [
            "title" => "Lemmy",
            "slug" => "lemmy",
            "url" => "https://cdn.simpleicons.org/lemmy?viewbox=auto"
            ],
            [
            "title" => "Lemon Squeezy",
            "slug" => "lemonsqueezy",
            "url" => "https://cdn.simpleicons.org/lemonsqueezy?viewbox=auto"
            ],
            [
            "title" => "Lenovo",
            "slug" => "lenovo",
            "url" => "https://cdn.simpleicons.org/lenovo?viewbox=auto"
            ],
            [
            "title" => "Lens",
            "slug" => "lens",
            "url" => "https://cdn.simpleicons.org/lens?viewbox=auto"
            ],
            [
            "title" => "Leptos",
            "slug" => "leptos",
            "url" => "https://cdn.simpleicons.org/leptos?viewbox=auto"
            ],
            [
            "title" => "Lerna",
            "slug" => "lerna",
            "url" => "https://cdn.simpleicons.org/lerna?viewbox=auto"
            ],
            [
            "title" => "Leroy Merlin",
            "slug" => "leroymerlin",
            "url" => "https://cdn.simpleicons.org/leroymerlin?viewbox=auto"
            ],
            [
            "title" => "Les libraires",
            "slug" => "leslibraires",
            "url" => "https://cdn.simpleicons.org/leslibraires?viewbox=auto"
            ],
            [
            "title" => "Less",
            "slug" => "less",
            "url" => "https://cdn.simpleicons.org/less?viewbox=auto"
            ],
            [
            "title" => "Let's Encrypt",
            "slug" => "letsencrypt",
            "url" => "https://cdn.simpleicons.org/letsencrypt?viewbox=auto"
            ],
            [
            "title" => "Letterboxd",
            "slug" => "letterboxd",
            "url" => "https://cdn.simpleicons.org/letterboxd?viewbox=auto"
            ],
            [
            "title" => "levels.fyi",
            "slug" => "levelsdotfyi",
            "url" => "https://cdn.simpleicons.org/levelsdotfyi?viewbox=auto"
            ],
            [
            "title" => "LG",
            "slug" => "lg",
            "url" => "https://cdn.simpleicons.org/lg?viewbox=auto"
            ],
            [
            "title" => "Li-Ning",
            "slug" => "lining",
            "url" => "https://cdn.simpleicons.org/lining?viewbox=auto"
            ],
            [
            "title" => "Libera.Chat",
            "slug" => "liberadotchat",
            "url" => "https://cdn.simpleicons.org/liberadotchat?viewbox=auto"
            ],
            [
            "title" => "Liberapay",
            "slug" => "liberapay",
            "url" => "https://cdn.simpleicons.org/liberapay?viewbox=auto"
            ],
            [
            "title" => "Libraries.io",
            "slug" => "librariesdotio",
            "url" => "https://cdn.simpleicons.org/librariesdotio?viewbox=auto"
            ],
            [
            "title" => "LibraryThing",
            "slug" => "librarything",
            "url" => "https://cdn.simpleicons.org/librarything?viewbox=auto"
            ],
            [
            "title" => "LibreOffice",
            "slug" => "libreoffice",
            "url" => "https://cdn.simpleicons.org/libreoffice?viewbox=auto"
            ],
            [
            "title" => "LibreOffice Base",
            "slug" => "libreofficebase",
            "url" => "https://cdn.simpleicons.org/libreofficebase?viewbox=auto"
            ],
            [
            "title" => "LibreOffice Calc",
            "slug" => "libreofficecalc",
            "url" => "https://cdn.simpleicons.org/libreofficecalc?viewbox=auto"
            ],
            [
            "title" => "LibreOffice Draw",
            "slug" => "libreofficedraw",
            "url" => "https://cdn.simpleicons.org/libreofficedraw?viewbox=auto"
            ],
            [
            "title" => "LibreOffice Impress",
            "slug" => "libreofficeimpress",
            "url" => "https://cdn.simpleicons.org/libreofficeimpress?viewbox=auto"
            ],
            [
            "title" => "LibreOffice Math",
            "slug" => "libreofficemath",
            "url" => "https://cdn.simpleicons.org/libreofficemath?viewbox=auto"
            ],
            [
            "title" => "LibreOffice Writer",
            "slug" => "libreofficewriter",
            "url" => "https://cdn.simpleicons.org/libreofficewriter?viewbox=auto"
            ],
            [
            "title" => "libuv",
            "slug" => "libuv",
            "url" => "https://cdn.simpleicons.org/libuv?viewbox=auto"
            ],
            [
            "title" => "Lichess",
            "slug" => "lichess",
            "url" => "https://cdn.simpleicons.org/lichess?viewbox=auto"
            ],
            [
            "title" => "Lidl",
            "slug" => "lidl",
            "url" => "https://cdn.simpleicons.org/lidl?viewbox=auto"
            ],
            [
            "title" => "LIFX",
            "slug" => "lifx",
            "url" => "https://cdn.simpleicons.org/lifx?viewbox=auto"
            ],
            [
            "title" => "LightBurn",
            "slug" => "lightburn",
            "url" => "https://cdn.simpleicons.org/lightburn?viewbox=auto"
            ],
            [
            "title" => "Lighthouse",
            "slug" => "lighthouse",
            "url" => "https://cdn.simpleicons.org/lighthouse?viewbox=auto"
            ],
            [
            "title" => "Lightning",
            "slug" => "lightning",
            "url" => "https://cdn.simpleicons.org/lightning?viewbox=auto"
            ],
            [
            "title" => "LimeSurvey",
            "slug" => "limesurvey",
            "url" => "https://cdn.simpleicons.org/limesurvey?viewbox=auto"
            ],
            [
            "title" => "LINE",
            "slug" => "line",
            "url" => "https://cdn.simpleicons.org/line?viewbox=auto"
            ],
            [
            "title" => "LineageOS",
            "slug" => "lineageos",
            "url" => "https://cdn.simpleicons.org/lineageos?viewbox=auto"
            ],
            [
            "title" => "Linear",
            "slug" => "linear",
            "url" => "https://cdn.simpleicons.org/linear?viewbox=auto"
            ],
            [
            "title" => "LinkedIn",
            "slug" => "linkedin",
            "url" => "https://cdn.simpleicons.org/linkedin?viewbox=auto"
            ],
            [
            "title" => "Linkerd",
            "slug" => "linkerd",
            "url" => "https://cdn.simpleicons.org/linkerd?viewbox=auto"
            ],
            [
            "title" => "Linkfire",
            "slug" => "linkfire",
            "url" => "https://cdn.simpleicons.org/linkfire?viewbox=auto"
            ],
            [
            "title" => "Linksys",
            "slug" => "linksys",
            "url" => "https://cdn.simpleicons.org/linksys?viewbox=auto"
            ],
            [
            "title" => "Linktree",
            "slug" => "linktree",
            "url" => "https://cdn.simpleicons.org/linktree?viewbox=auto"
            ],
            [
            "title" => "LintCode",
            "slug" => "lintcode",
            "url" => "https://cdn.simpleicons.org/lintcode?viewbox=auto"
            ],
            [
            "title" => "Linux",
            "slug" => "linux",
            "url" => "https://cdn.simpleicons.org/linux?viewbox=auto"
            ],
            [
            "title" => "Linux Containers",
            "slug" => "linuxcontainers",
            "url" => "https://cdn.simpleicons.org/linuxcontainers?viewbox=auto"
            ],
            [
            "title" => "Linux Foundation",
            "slug" => "linuxfoundation",
            "url" => "https://cdn.simpleicons.org/linuxfoundation?viewbox=auto"
            ],
            [
            "title" => "Linux Mint",
            "slug" => "linuxmint",
            "url" => "https://cdn.simpleicons.org/linuxmint?viewbox=auto"
            ],
            [
            "title" => "Linux Professional Institute",
            "slug" => "linuxprofessionalinstitute",
            "url" => "https://cdn.simpleicons.org/linuxprofessionalinstitute?viewbox=auto"
            ],
            [
            "title" => "LinuxServer",
            "slug" => "linuxserver",
            "url" => "https://cdn.simpleicons.org/linuxserver?viewbox=auto"
            ],
            [
            "title" => "Lion Air",
            "slug" => "lionair",
            "url" => "https://cdn.simpleicons.org/lionair?viewbox=auto"
            ],
            [
            "title" => "Liquibase",
            "slug" => "liquibase",
            "url" => "https://cdn.simpleicons.org/liquibase?viewbox=auto"
            ],
            [
            "title" => "listmonk",
            "slug" => "listmonk",
            "url" => "https://cdn.simpleicons.org/listmonk?viewbox=auto"
            ],
            [
            "title" => "Lit",
            "slug" => "lit",
            "url" => "https://cdn.simpleicons.org/lit?viewbox=auto"
            ],
            [
            "title" => "Litecoin",
            "slug" => "litecoin",
            "url" => "https://cdn.simpleicons.org/litecoin?viewbox=auto"
            ],
            [
            "title" => "LITIENGINE",
            "slug" => "litiengine",
            "url" => "https://cdn.simpleicons.org/litiengine?viewbox=auto"
            ],
            [
            "title" => "LiveChat",
            "slug" => "livechat",
            "url" => "https://cdn.simpleicons.org/livechat?viewbox=auto"
            ],
            [
            "title" => "LiveJournal",
            "slug" => "livejournal",
            "url" => "https://cdn.simpleicons.org/livejournal?viewbox=auto"
            ],
            [
            "title" => "Livewire",
            "slug" => "livewire",
            "url" => "https://cdn.simpleicons.org/livewire?viewbox=auto"
            ],
            [
            "title" => "LLVM",
            "slug" => "llvm",
            "url" => "https://cdn.simpleicons.org/llvm?viewbox=auto"
            ],
            [
            "title" => "LMMS",
            "slug" => "lmms",
            "url" => "https://cdn.simpleicons.org/lmms?viewbox=auto"
            ],
            [
            "title" => "Local",
            "slug" => "local",
            "url" => "https://cdn.simpleicons.org/local?viewbox=auto"
            ],
            [
            "title" => "Lodash",
            "slug" => "lodash",
            "url" => "https://cdn.simpleicons.org/lodash?viewbox=auto"
            ],
            [
            "title" => "Logitech",
            "slug" => "logitech",
            "url" => "https://cdn.simpleicons.org/logitech?viewbox=auto"
            ],
            [
            "title" => "Logitech G",
            "slug" => "logitechg",
            "url" => "https://cdn.simpleicons.org/logitechg?viewbox=auto"
            ],
            [
            "title" => "LogMeIn",
            "slug" => "logmein",
            "url" => "https://cdn.simpleicons.org/logmein?viewbox=auto"
            ],
            [
            "title" => "Logseq",
            "slug" => "logseq",
            "url" => "https://cdn.simpleicons.org/logseq?viewbox=auto"
            ],
            [
            "title" => "Logstash",
            "slug" => "logstash",
            "url" => "https://cdn.simpleicons.org/logstash?viewbox=auto"
            ],
            [
            "title" => "Looker",
            "slug" => "looker",
            "url" => "https://cdn.simpleicons.org/looker?viewbox=auto"
            ],
            [
            "title" => "Loom",
            "slug" => "loom",
            "url" => "https://cdn.simpleicons.org/loom?viewbox=auto"
            ],
            [
            "title" => "Loop",
            "slug" => "loop",
            "url" => "https://cdn.simpleicons.org/loop?viewbox=auto"
            ],
            [
            "title" => "LoopBack",
            "slug" => "loopback",
            "url" => "https://cdn.simpleicons.org/loopback?viewbox=auto"
            ],
            [
            "title" => "Loot Crate",
            "slug" => "lootcrate",
            "url" => "https://cdn.simpleicons.org/lootcrate?viewbox=auto"
            ],
            [
            "title" => "Lospec",
            "slug" => "lospec",
            "url" => "https://cdn.simpleicons.org/lospec?viewbox=auto"
            ],
            [
            "title" => "LOT Polish Airlines",
            "slug" => "lotpolishairlines",
            "url" => "https://cdn.simpleicons.org/lotpolishairlines?viewbox=auto"
            ],
            [
            "title" => "LTspice",
            "slug" => "ltspice",
            "url" => "https://cdn.simpleicons.org/ltspice?viewbox=auto"
            ],
            [
            "title" => "Lua",
            "slug" => "lua",
            "url" => "https://cdn.simpleicons.org/lua?viewbox=auto"
            ],
            [
            "title" => "Lubuntu",
            "slug" => "lubuntu",
            "url" => "https://cdn.simpleicons.org/lubuntu?viewbox=auto"
            ],
            [
            "title" => "Lucia",
            "slug" => "lucia",
            "url" => "https://cdn.simpleicons.org/lucia?viewbox=auto"
            ],
            [
            "title" => "Lucid",
            "slug" => "lucid",
            "url" => "https://cdn.simpleicons.org/lucid?viewbox=auto"
            ],
            [
            "title" => "Ludwig",
            "slug" => "ludwig",
            "url" => "https://cdn.simpleicons.org/ludwig?viewbox=auto"
            ],
            [
            "title" => "Lufthansa",
            "slug" => "lufthansa",
            "url" => "https://cdn.simpleicons.org/lufthansa?viewbox=auto"
            ],
            [
            "title" => "Lumen",
            "slug" => "lumen",
            "url" => "https://cdn.simpleicons.org/lumen?viewbox=auto"
            ],
            [
            "title" => "Lunacy",
            "slug" => "lunacy",
            "url" => "https://cdn.simpleicons.org/lunacy?viewbox=auto"
            ],
            [
            "title" => "Lutris",
            "slug" => "lutris",
            "url" => "https://cdn.simpleicons.org/lutris?viewbox=auto"
            ],
            [
            "title" => "Lydia",
            "slug" => "lydia",
            "url" => "https://cdn.simpleicons.org/lydia?viewbox=auto"
            ],
            [
            "title" => "Lyft",
            "slug" => "lyft",
            "url" => "https://cdn.simpleicons.org/lyft?viewbox=auto"
            ],
            [
            "title" => "MAAS",
            "slug" => "maas",
            "url" => "https://cdn.simpleicons.org/maas?viewbox=auto"
            ],
            [
            "title" => "macOS",
            "slug" => "macos",
            "url" => "https://cdn.simpleicons.org/macos?viewbox=auto"
            ],
            [
            "title" => "MacPaw",
            "slug" => "macpaw",
            "url" => "https://cdn.simpleicons.org/macpaw?viewbox=auto"
            ],
            [
            "title" => "Macy's",
            "slug" => "macys",
            "url" => "https://cdn.simpleicons.org/macys?viewbox=auto"
            ],
            [
            "title" => "Magasins U",
            "slug" => "magasinsu",
            "url" => "https://cdn.simpleicons.org/magasinsu?viewbox=auto"
            ],
            [
            "title" => "Magento",
            "slug" => "magento",
            "url" => "https://cdn.simpleicons.org/magento?viewbox=auto"
            ],
            [
            "title" => "Magic",
            "slug" => "magic",
            "url" => "https://cdn.simpleicons.org/magic?viewbox=auto"
            ],
            [
            "title" => "Magisk",
            "slug" => "magisk",
            "url" => "https://cdn.simpleicons.org/magisk?viewbox=auto"
            ],
            [
            "title" => "Mahindra",
            "slug" => "mahindra",
            "url" => "https://cdn.simpleicons.org/mahindra?viewbox=auto"
            ],
            [
            "title" => "mail.com",
            "slug" => "maildotcom",
            "url" => "https://cdn.simpleicons.org/maildotcom?viewbox=auto"
            ],
            [
            "title" => "Mail.Ru",
            "slug" => "maildotru",
            "url" => "https://cdn.simpleicons.org/maildotru?viewbox=auto"
            ],
            [
            "title" => "MailChimp",
            "slug" => "mailchimp",
            "url" => "https://cdn.simpleicons.org/mailchimp?viewbox=auto"
            ],
            [
            "title" => "Mailgun",
            "slug" => "mailgun",
            "url" => "https://cdn.simpleicons.org/mailgun?viewbox=auto"
            ],
            [
            "title" => "Mailtrap",
            "slug" => "mailtrap",
            "url" => "https://cdn.simpleicons.org/mailtrap?viewbox=auto"
            ],
            [
            "title" => "MainWP",
            "slug" => "mainwp",
            "url" => "https://cdn.simpleicons.org/mainwp?viewbox=auto"
            ],
            [
            "title" => "Major League Hacking",
            "slug" => "majorleaguehacking",
            "url" => "https://cdn.simpleicons.org/majorleaguehacking?viewbox=auto"
            ],
            [
            "title" => "Make",
            "slug" => "make",
            "url" => "https://cdn.simpleicons.org/make?viewbox=auto"
            ],
            [
            "title" => "MakerBot",
            "slug" => "makerbot",
            "url" => "https://cdn.simpleicons.org/makerbot?viewbox=auto"
            ],
            [
            "title" => "Malt",
            "slug" => "malt",
            "url" => "https://cdn.simpleicons.org/malt?viewbox=auto"
            ],
            [
            "title" => "Malwarebytes",
            "slug" => "malwarebytes",
            "url" => "https://cdn.simpleicons.org/malwarebytes?viewbox=auto"
            ],
            [
            "title" => "Mamba UI",
            "slug" => "mambaui",
            "url" => "https://cdn.simpleicons.org/mambaui?viewbox=auto"
            ],
            [
            "title" => "MAMP",
            "slug" => "mamp",
            "url" => "https://cdn.simpleicons.org/mamp?viewbox=auto"
            ],
            [
            "title" => "MAN",
            "slug" => "man",
            "url" => "https://cdn.simpleicons.org/man?viewbox=auto"
            ],
            [
            "title" => "ManageIQ",
            "slug" => "manageiq",
            "url" => "https://cdn.simpleicons.org/manageiq?viewbox=auto"
            ],
            [
            "title" => "Manjaro",
            "slug" => "manjaro",
            "url" => "https://cdn.simpleicons.org/manjaro?viewbox=auto"
            ],
            [
            "title" => "Mantine",
            "slug" => "mantine",
            "url" => "https://cdn.simpleicons.org/mantine?viewbox=auto"
            ],
            [
            "title" => "Mapbox",
            "slug" => "mapbox",
            "url" => "https://cdn.simpleicons.org/mapbox?viewbox=auto"
            ],
            [
            "title" => "MapLibre",
            "slug" => "maplibre",
            "url" => "https://cdn.simpleicons.org/maplibre?viewbox=auto"
            ],
            [
            "title" => "MariaDB",
            "slug" => "mariadb",
            "url" => "https://cdn.simpleicons.org/mariadb?viewbox=auto"
            ],
            [
            "title" => "MariaDB Foundation",
            "slug" => "mariadbfoundation",
            "url" => "https://cdn.simpleicons.org/mariadbfoundation?viewbox=auto"
            ],
            [
            "title" => "Markdown",
            "slug" => "markdown",
            "url" => "https://cdn.simpleicons.org/markdown?viewbox=auto"
            ],
            [
            "title" => "Marketo",
            "slug" => "marketo",
            "url" => "https://cdn.simpleicons.org/marketo?viewbox=auto"
            ],
            [
            "title" => "Marko",
            "slug" => "marko",
            "url" => "https://cdn.simpleicons.org/marko?viewbox=auto"
            ],
            [
            "title" => "Marriott",
            "slug" => "marriott",
            "url" => "https://cdn.simpleicons.org/marriott?viewbox=auto"
            ],
            [
            "title" => "MarvelApp",
            "slug" => "marvelapp",
            "url" => "https://cdn.simpleicons.org/marvelapp?viewbox=auto"
            ],
            [
            "title" => "Maserati",
            "slug" => "maserati",
            "url" => "https://cdn.simpleicons.org/maserati?viewbox=auto"
            ],
            [
            "title" => "MasterCard",
            "slug" => "mastercard",
            "url" => "https://cdn.simpleicons.org/mastercard?viewbox=auto"
            ],
            [
            "title" => "mastercomfig",
            "slug" => "mastercomfig",
            "url" => "https://cdn.simpleicons.org/mastercomfig?viewbox=auto"
            ],
            [
            "title" => "Mastodon",
            "slug" => "mastodon",
            "url" => "https://cdn.simpleicons.org/mastodon?viewbox=auto"
            ],
            [
            "title" => "Material Design",
            "slug" => "materialdesign",
            "url" => "https://cdn.simpleicons.org/materialdesign?viewbox=auto"
            ],
            [
            "title" => "Material Design Icons",
            "slug" => "materialdesignicons",
            "url" => "https://cdn.simpleicons.org/materialdesignicons?viewbox=auto"
            ],
            [
            "title" => "Material for MkDocs",
            "slug" => "materialformkdocs",
            "url" => "https://cdn.simpleicons.org/materialformkdocs?viewbox=auto"
            ],
            [
            "title" => "Matillion",
            "slug" => "matillion",
            "url" => "https://cdn.simpleicons.org/matillion?viewbox=auto"
            ],
            [
            "title" => "Matomo",
            "slug" => "matomo",
            "url" => "https://cdn.simpleicons.org/matomo?viewbox=auto"
            ],
            [
            "title" => "Matrix",
            "slug" => "matrix",
            "url" => "https://cdn.simpleicons.org/matrix?viewbox=auto"
            ],
            [
            "title" => "Matter.js",
            "slug" => "matterdotjs",
            "url" => "https://cdn.simpleicons.org/matterdotjs?viewbox=auto"
            ],
            [
            "title" => "Mattermost",
            "slug" => "mattermost",
            "url" => "https://cdn.simpleicons.org/mattermost?viewbox=auto"
            ],
            [
            "title" => "Matternet",
            "slug" => "matternet",
            "url" => "https://cdn.simpleicons.org/matternet?viewbox=auto"
            ],
            [
            "title" => "Mautic",
            "slug" => "mautic",
            "url" => "https://cdn.simpleicons.org/mautic?viewbox=auto"
            ],
            [
            "title" => "Max",
            "slug" => "max",
            "url" => "https://cdn.simpleicons.org/max?viewbox=auto"
            ],
            [
            "title" => "Max-Planck-Gesellschaft",
            "slug" => "maxplanckgesellschaft",
            "url" => "https://cdn.simpleicons.org/maxplanckgesellschaft?viewbox=auto"
            ],
            [
            "title" => "Maytag",
            "slug" => "maytag",
            "url" => "https://cdn.simpleicons.org/maytag?viewbox=auto"
            ],
            [
            "title" => "Mazda",
            "slug" => "mazda",
            "url" => "https://cdn.simpleicons.org/mazda?viewbox=auto"
            ],
            [
            "title" => "McAfee",
            "slug" => "mcafee",
            "url" => "https://cdn.simpleicons.org/mcafee?viewbox=auto"
            ],
            [
            "title" => "McDonald's",
            "slug" => "mcdonalds",
            "url" => "https://cdn.simpleicons.org/mcdonalds?viewbox=auto"
            ],
            [
            "title" => "McLaren",
            "slug" => "mclaren",
            "url" => "https://cdn.simpleicons.org/mclaren?viewbox=auto"
            ],
            [
            "title" => "mdBook",
            "slug" => "mdbook",
            "url" => "https://cdn.simpleicons.org/mdbook?viewbox=auto"
            ],
            [
            "title" => "MDN Web Docs",
            "slug" => "mdnwebdocs",
            "url" => "https://cdn.simpleicons.org/mdnwebdocs?viewbox=auto"
            ],
            [
            "title" => "MDX",
            "slug" => "mdx",
            "url" => "https://cdn.simpleicons.org/mdx?viewbox=auto"
            ],
            [
            "title" => "MediaFire",
            "slug" => "mediafire",
            "url" => "https://cdn.simpleicons.org/mediafire?viewbox=auto"
            ],
            [
            "title" => "MediaMarkt",
            "slug" => "mediamarkt",
            "url" => "https://cdn.simpleicons.org/mediamarkt?viewbox=auto"
            ],
            [
            "title" => "MediaTek",
            "slug" => "mediatek",
            "url" => "https://cdn.simpleicons.org/mediatek?viewbox=auto"
            ],
            [
            "title" => "MediBang Paint",
            "slug" => "medibangpaint",
            "url" => "https://cdn.simpleicons.org/medibangpaint?viewbox=auto"
            ],
            [
            "title" => "Medium",
            "slug" => "medium",
            "url" => "https://cdn.simpleicons.org/medium?viewbox=auto"
            ],
            [
            "title" => "Medusa",
            "slug" => "medusa",
            "url" => "https://cdn.simpleicons.org/medusa?viewbox=auto"
            ],
            [
            "title" => "Meetup",
            "slug" => "meetup",
            "url" => "https://cdn.simpleicons.org/meetup?viewbox=auto"
            ],
            [
            "title" => "MEGA",
            "slug" => "mega",
            "url" => "https://cdn.simpleicons.org/mega?viewbox=auto"
            ],
            [
            "title" => "Meilisearch",
            "slug" => "meilisearch",
            "url" => "https://cdn.simpleicons.org/meilisearch?viewbox=auto"
            ],
            [
            "title" => "Meituan",
            "slug" => "meituan",
            "url" => "https://cdn.simpleicons.org/meituan?viewbox=auto"
            ],
            [
            "title" => "Meizu",
            "slug" => "meizu",
            "url" => "https://cdn.simpleicons.org/meizu?viewbox=auto"
            ],
            [
            "title" => "Mendeley",
            "slug" => "mendeley",
            "url" => "https://cdn.simpleicons.org/mendeley?viewbox=auto"
            ],
            [
            "title" => "MentorCruise",
            "slug" => "mentorcruise",
            "url" => "https://cdn.simpleicons.org/mentorcruise?viewbox=auto"
            ],
            [
            "title" => "Mercado Pago",
            "slug" => "mercadopago",
            "url" => "https://cdn.simpleicons.org/mercadopago?viewbox=auto"
            ],
            [
            "title" => "Mercedes",
            "slug" => "mercedes",
            "url" => "https://cdn.simpleicons.org/mercedes?viewbox=auto"
            ],
            [
            "title" => "Merck",
            "slug" => "merck",
            "url" => "https://cdn.simpleicons.org/merck?viewbox=auto"
            ],
            [
            "title" => "Mercurial",
            "slug" => "mercurial",
            "url" => "https://cdn.simpleicons.org/mercurial?viewbox=auto"
            ],
            [
            "title" => "Mermaid",
            "slug" => "mermaid",
            "url" => "https://cdn.simpleicons.org/mermaid?viewbox=auto"
            ],
            [
            "title" => "Messenger",
            "slug" => "messenger",
            "url" => "https://cdn.simpleicons.org/messenger?viewbox=auto"
            ],
            [
            "title" => "Meta",
            "slug" => "meta",
            "url" => "https://cdn.simpleicons.org/meta?viewbox=auto"
            ],
            [
            "title" => "Metabase",
            "slug" => "metabase",
            "url" => "https://cdn.simpleicons.org/metabase?viewbox=auto"
            ],
            [
            "title" => "Metacritic",
            "slug" => "metacritic",
            "url" => "https://cdn.simpleicons.org/metacritic?viewbox=auto"
            ],
            [
            "title" => "MetaFilter",
            "slug" => "metafilter",
            "url" => "https://cdn.simpleicons.org/metafilter?viewbox=auto"
            ],
            [
            "title" => "Metasploit",
            "slug" => "metasploit",
            "url" => "https://cdn.simpleicons.org/metasploit?viewbox=auto"
            ],
            [
            "title" => "Meteor",
            "slug" => "meteor",
            "url" => "https://cdn.simpleicons.org/meteor?viewbox=auto"
            ],
            [
            "title" => "Metro",
            "slug" => "metro",
            "url" => "https://cdn.simpleicons.org/metro?viewbox=auto"
            ],
            [
            "title" => "Metro de la Ciudad de México",
            "slug" => "metrodelaciudaddemexico",
            "url" => "https://cdn.simpleicons.org/metrodelaciudaddemexico?viewbox=auto"
            ],
            [
            "title" => "Metro de Madrid",
            "slug" => "metrodemadrid",
            "url" => "https://cdn.simpleicons.org/metrodemadrid?viewbox=auto"
            ],
            [
            "title" => "Métro de Paris",
            "slug" => "metrodeparis",
            "url" => "https://cdn.simpleicons.org/metrodeparis?viewbox=auto"
            ],
            [
            "title" => "MeWe",
            "slug" => "mewe",
            "url" => "https://cdn.simpleicons.org/mewe?viewbox=auto"
            ],
            [
            "title" => "MG",
            "slug" => "mg",
            "url" => "https://cdn.simpleicons.org/mg?viewbox=auto"
            ],
            [
            "title" => "Micro Editor",
            "slug" => "microeditor",
            "url" => "https://cdn.simpleicons.org/microeditor?viewbox=auto"
            ],
            [
            "title" => "micro:bit",
            "slug" => "microbit",
            "url" => "https://cdn.simpleicons.org/microbit?viewbox=auto"
            ],
            [
            "title" => "Micro.blog",
            "slug" => "microdotblog",
            "url" => "https://cdn.simpleicons.org/microdotblog?viewbox=auto"
            ],
            [
            "title" => "Microgenetics",
            "slug" => "microgenetics",
            "url" => "https://cdn.simpleicons.org/microgenetics?viewbox=auto"
            ],
            [
            "title" => "MicroPython",
            "slug" => "micropython",
            "url" => "https://cdn.simpleicons.org/micropython?viewbox=auto"
            ],
            [
            "title" => "Microsoft",
            "slug" => "microsoft",
            "url" => "https://cdn.simpleicons.org/microsoft?viewbox=auto"
            ],
            [
            "title" => "Microsoft Academic",
            "slug" => "microsoftacademic",
            "url" => "https://cdn.simpleicons.org/microsoftacademic?viewbox=auto"
            ],
            [
            "title" => "Microsoft Access",
            "slug" => "microsoftaccess",
            "url" => "https://cdn.simpleicons.org/microsoftaccess?viewbox=auto"
            ],
            [
            "title" => "Microsoft Azure",
            "slug" => "microsoftazure",
            "url" => "https://cdn.simpleicons.org/microsoftazure?viewbox=auto"
            ],
            [
            "title" => "Microsoft Bing",
            "slug" => "microsoftbing",
            "url" => "https://cdn.simpleicons.org/microsoftbing?viewbox=auto"
            ],
            [
            "title" => "Microsoft Edge",
            "slug" => "microsoftedge",
            "url" => "https://cdn.simpleicons.org/microsoftedge?viewbox=auto"
            ],
            [
            "title" => "Microsoft Excel",
            "slug" => "microsoftexcel",
            "url" => "https://cdn.simpleicons.org/microsoftexcel?viewbox=auto"
            ],
            [
            "title" => "Microsoft Exchange",
            "slug" => "microsoftexchange",
            "url" => "https://cdn.simpleicons.org/microsoftexchange?viewbox=auto"
            ],
            [
            "title" => "Microsoft OneDrive",
            "slug" => "microsoftonedrive",
            "url" => "https://cdn.simpleicons.org/microsoftonedrive?viewbox=auto"
            ],
            [
            "title" => "Microsoft OneNote",
            "slug" => "microsoftonenote",
            "url" => "https://cdn.simpleicons.org/microsoftonenote?viewbox=auto"
            ],
            [
            "title" => "Microsoft Outlook",
            "slug" => "microsoftoutlook",
            "url" => "https://cdn.simpleicons.org/microsoftoutlook?viewbox=auto"
            ],
            [
            "title" => "Microsoft PowerPoint",
            "slug" => "microsoftpowerpoint",
            "url" => "https://cdn.simpleicons.org/microsoftpowerpoint?viewbox=auto"
            ],
            [
            "title" => "Microsoft SharePoint",
            "slug" => "microsoftsharepoint",
            "url" => "https://cdn.simpleicons.org/microsoftsharepoint?viewbox=auto"
            ],
            [
            "title" => "Microsoft SQL Server",
            "slug" => "microsoftsqlserver",
            "url" => "https://cdn.simpleicons.org/microsoftsqlserver?viewbox=auto"
            ],
            [
            "title" => "Microsoft Store",
            "slug" => "microsoftstore",
            "url" => "https://cdn.simpleicons.org/microsoftstore?viewbox=auto"
            ],
            [
            "title" => "Microsoft Teams",
            "slug" => "microsoftteams",
            "url" => "https://cdn.simpleicons.org/microsoftteams?viewbox=auto"
            ],
            [
            "title" => "Microsoft Translator",
            "slug" => "microsofttranslator",
            "url" => "https://cdn.simpleicons.org/microsofttranslator?viewbox=auto"
            ],
            [
            "title" => "Microsoft Visio",
            "slug" => "microsoftvisio",
            "url" => "https://cdn.simpleicons.org/microsoftvisio?viewbox=auto"
            ],
            [
            "title" => "Microsoft Word",
            "slug" => "microsoftword",
            "url" => "https://cdn.simpleicons.org/microsoftword?viewbox=auto"
            ],
            [
            "title" => "Microstation",
            "slug" => "microstation",
            "url" => "https://cdn.simpleicons.org/microstation?viewbox=auto"
            ],
            [
            "title" => "MicroStrategy",
            "slug" => "microstrategy",
            "url" => "https://cdn.simpleicons.org/microstrategy?viewbox=auto"
            ],
            [
            "title" => "MIDI",
            "slug" => "midi",
            "url" => "https://cdn.simpleicons.org/midi?viewbox=auto"
            ],
            [
            "title" => "Migadu",
            "slug" => "migadu",
            "url" => "https://cdn.simpleicons.org/migadu?viewbox=auto"
            ],
            [
            "title" => "Mikrotik",
            "slug" => "mikrotik",
            "url" => "https://cdn.simpleicons.org/mikrotik?viewbox=auto"
            ],
            [
            "title" => "Milanote",
            "slug" => "milanote",
            "url" => "https://cdn.simpleicons.org/milanote?viewbox=auto"
            ],
            [
            "title" => "Milvus",
            "slug" => "milvus",
            "url" => "https://cdn.simpleicons.org/milvus?viewbox=auto"
            ],
            [
            "title" => "Minds",
            "slug" => "minds",
            "url" => "https://cdn.simpleicons.org/minds?viewbox=auto"
            ],
            [
            "title" => "Minecraft",
            "slug" => "minecraft",
            "url" => "https://cdn.simpleicons.org/minecraft?viewbox=auto"
            ],
            [
            "title" => "Minetest",
            "slug" => "minetest",
            "url" => "https://cdn.simpleicons.org/minetest?viewbox=auto"
            ],
            [
            "title" => "Mini",
            "slug" => "mini",
            "url" => "https://cdn.simpleicons.org/mini?viewbox=auto"
            ],
            [
            "title" => "MinIO",
            "slug" => "minio",
            "url" => "https://cdn.simpleicons.org/minio?viewbox=auto"
            ],
            [
            "title" => "Minutemailer",
            "slug" => "minutemailer",
            "url" => "https://cdn.simpleicons.org/minutemailer?viewbox=auto"
            ],
            [
            "title" => "Miraheze",
            "slug" => "miraheze",
            "url" => "https://cdn.simpleicons.org/miraheze?viewbox=auto"
            ],
            [
            "title" => "Miro",
            "slug" => "miro",
            "url" => "https://cdn.simpleicons.org/miro?viewbox=auto"
            ],
            [
            "title" => "Misskey",
            "slug" => "misskey",
            "url" => "https://cdn.simpleicons.org/misskey?viewbox=auto"
            ],
            [
            "title" => "Mitsubishi",
            "slug" => "mitsubishi",
            "url" => "https://cdn.simpleicons.org/mitsubishi?viewbox=auto"
            ],
            [
            "title" => "Mix",
            "slug" => "mix",
            "url" => "https://cdn.simpleicons.org/mix?viewbox=auto"
            ],
            [
            "title" => "Mixcloud",
            "slug" => "mixcloud",
            "url" => "https://cdn.simpleicons.org/mixcloud?viewbox=auto"
            ],
            [
            "title" => "Mixpanel",
            "slug" => "mixpanel",
            "url" => "https://cdn.simpleicons.org/mixpanel?viewbox=auto"
            ],
            [
            "title" => "MLB",
            "slug" => "mlb",
            "url" => "https://cdn.simpleicons.org/mlb?viewbox=auto"
            ],
            [
            "title" => "MLflow",
            "slug" => "mlflow",
            "url" => "https://cdn.simpleicons.org/mlflow?viewbox=auto"
            ],
            [
            "title" => "MobX",
            "slug" => "mobx",
            "url" => "https://cdn.simpleicons.org/mobx?viewbox=auto"
            ],
            [
            "title" => "MobX-State-Tree",
            "slug" => "mobxstatetree",
            "url" => "https://cdn.simpleicons.org/mobxstatetree?viewbox=auto"
            ],
            [
            "title" => "Mocha",
            "slug" => "mocha",
            "url" => "https://cdn.simpleicons.org/mocha?viewbox=auto"
            ],
            [
            "title" => "Mock Service Worker",
            "slug" => "mockserviceworker",
            "url" => "https://cdn.simpleicons.org/mockserviceworker?viewbox=auto"
            ],
            [
            "title" => "Modal",
            "slug" => "modal",
            "url" => "https://cdn.simpleicons.org/modal?viewbox=auto"
            ],
            [
            "title" => "Modin",
            "slug" => "modin",
            "url" => "https://cdn.simpleicons.org/modin?viewbox=auto"
            ],
            [
            "title" => "Modrinth",
            "slug" => "modrinth",
            "url" => "https://cdn.simpleicons.org/modrinth?viewbox=auto"
            ],
            [
            "title" => "MODX",
            "slug" => "modx",
            "url" => "https://cdn.simpleicons.org/modx?viewbox=auto"
            ],
            [
            "title" => "Mojang Studios",
            "slug" => "mojangstudios",
            "url" => "https://cdn.simpleicons.org/mojangstudios?viewbox=auto"
            ],
            [
            "title" => "Moleculer",
            "slug" => "moleculer",
            "url" => "https://cdn.simpleicons.org/moleculer?viewbox=auto"
            ],
            [
            "title" => "Momenteo",
            "slug" => "momenteo",
            "url" => "https://cdn.simpleicons.org/momenteo?viewbox=auto"
            ],
            [
            "title" => "Monero",
            "slug" => "monero",
            "url" => "https://cdn.simpleicons.org/monero?viewbox=auto"
            ],
            [
            "title" => "MoneyGram",
            "slug" => "moneygram",
            "url" => "https://cdn.simpleicons.org/moneygram?viewbox=auto"
            ],
            [
            "title" => "MongoDB",
            "slug" => "mongodb",
            "url" => "https://cdn.simpleicons.org/mongodb?viewbox=auto"
            ],
            [
            "title" => "Mongoose",
            "slug" => "mongoose",
            "url" => "https://cdn.simpleicons.org/mongoose?viewbox=auto"
            ],
            [
            "title" => "Mongoose",
            "slug" => "mongoose",
            "url" => "https://cdn.simpleicons.org/mongoose?viewbox=auto"
            ],
            [
            "title" => "Monica",
            "slug" => "monica",
            "url" => "https://cdn.simpleicons.org/monica?viewbox=auto"
            ],
            [
            "title" => "monkey tie",
            "slug" => "monkeytie",
            "url" => "https://cdn.simpleicons.org/monkeytie?viewbox=auto"
            ],
            [
            "title" => "Monkeytype",
            "slug" => "monkeytype",
            "url" => "https://cdn.simpleicons.org/monkeytype?viewbox=auto"
            ],
            [
            "title" => "MonoGame",
            "slug" => "monogame",
            "url" => "https://cdn.simpleicons.org/monogame?viewbox=auto"
            ],
            [
            "title" => "Monoprix",
            "slug" => "monoprix",
            "url" => "https://cdn.simpleicons.org/monoprix?viewbox=auto"
            ],
            [
            "title" => "Monster",
            "slug" => "monster",
            "url" => "https://cdn.simpleicons.org/monster?viewbox=auto"
            ],
            [
            "title" => "Monzo",
            "slug" => "monzo",
            "url" => "https://cdn.simpleicons.org/monzo?viewbox=auto"
            ],
            [
            "title" => "Moo",
            "slug" => "moo",
            "url" => "https://cdn.simpleicons.org/moo?viewbox=auto"
            ],
            [
            "title" => "Moodle",
            "slug" => "moodle",
            "url" => "https://cdn.simpleicons.org/moodle?viewbox=auto"
            ],
            [
            "title" => "Moonrepo",
            "slug" => "moonrepo",
            "url" => "https://cdn.simpleicons.org/moonrepo?viewbox=auto"
            ],
            [
            "title" => "Moqups",
            "slug" => "moqups",
            "url" => "https://cdn.simpleicons.org/moqups?viewbox=auto"
            ],
            [
            "title" => "Morrisons",
            "slug" => "morrisons",
            "url" => "https://cdn.simpleicons.org/morrisons?viewbox=auto"
            ],
            [
            "title" => "Moscow Metro",
            "slug" => "moscowmetro",
            "url" => "https://cdn.simpleicons.org/moscowmetro?viewbox=auto"
            ],
            [
            "title" => "Motorola",
            "slug" => "motorola",
            "url" => "https://cdn.simpleicons.org/motorola?viewbox=auto"
            ],
            [
            "title" => "Mozilla",
            "slug" => "mozilla",
            "url" => "https://cdn.simpleicons.org/mozilla?viewbox=auto"
            ],
            [
            "title" => "mpv",
            "slug" => "mpv",
            "url" => "https://cdn.simpleicons.org/mpv?viewbox=auto"
            ],
            [
            "title" => "MQTT",
            "slug" => "mqtt",
            "url" => "https://cdn.simpleicons.org/mqtt?viewbox=auto"
            ],
            [
            "title" => "MSI",
            "slug" => "msi",
            "url" => "https://cdn.simpleicons.org/msi?viewbox=auto"
            ],
            [
            "title" => "MSI Business",
            "slug" => "msibusiness",
            "url" => "https://cdn.simpleicons.org/msibusiness?viewbox=auto"
            ],
            [
            "title" => "MTA",
            "slug" => "mta",
            "url" => "https://cdn.simpleicons.org/mta?viewbox=auto"
            ],
            [
            "title" => "MTR",
            "slug" => "mtr",
            "url" => "https://cdn.simpleicons.org/mtr?viewbox=auto"
            ],
            [
            "title" => "MUBI",
            "slug" => "mubi",
            "url" => "https://cdn.simpleicons.org/mubi?viewbox=auto"
            ],
            [
            "title" => "MUI",
            "slug" => "mui",
            "url" => "https://cdn.simpleicons.org/mui?viewbox=auto"
            ],
            [
            "title" => "Mulesoft",
            "slug" => "mulesoft",
            "url" => "https://cdn.simpleicons.org/mulesoft?viewbox=auto"
            ],
            [
            "title" => "Müller",
            "slug" => "muller",
            "url" => "https://cdn.simpleicons.org/muller?viewbox=auto"
            ],
            [
            "title" => "Multisim",
            "slug" => "multisim",
            "url" => "https://cdn.simpleicons.org/multisim?viewbox=auto"
            ],
            [
            "title" => "Mumble",
            "slug" => "mumble",
            "url" => "https://cdn.simpleicons.org/mumble?viewbox=auto"
            ],
            [
            "title" => "MUO",
            "slug" => "muo",
            "url" => "https://cdn.simpleicons.org/muo?viewbox=auto"
            ],
            [
            "title" => "Mural",
            "slug" => "mural",
            "url" => "https://cdn.simpleicons.org/mural?viewbox=auto"
            ],
            [
            "title" => "MuseScore",
            "slug" => "musescore",
            "url" => "https://cdn.simpleicons.org/musescore?viewbox=auto"
            ],
            [
            "title" => "MusicBrainz",
            "slug" => "musicbrainz",
            "url" => "https://cdn.simpleicons.org/musicbrainz?viewbox=auto"
            ],
            [
            "title" => "MX Linux",
            "slug" => "mxlinux",
            "url" => "https://cdn.simpleicons.org/mxlinux?viewbox=auto"
            ],
            [
            "title" => "MyAnimeList",
            "slug" => "myanimelist",
            "url" => "https://cdn.simpleicons.org/myanimelist?viewbox=auto"
            ],
            [
            "title" => "MyGet",
            "slug" => "myget",
            "url" => "https://cdn.simpleicons.org/myget?viewbox=auto"
            ],
            [
            "title" => "MYOB",
            "slug" => "myob",
            "url" => "https://cdn.simpleicons.org/myob?viewbox=auto"
            ],
            [
            "title" => "Myspace",
            "slug" => "myspace",
            "url" => "https://cdn.simpleicons.org/myspace?viewbox=auto"
            ],
            [
            "title" => "MySQL",
            "slug" => "mysql",
            "url" => "https://cdn.simpleicons.org/mysql?viewbox=auto"
            ],
            [
            "title" => "N26",
            "slug" => "n26",
            "url" => "https://cdn.simpleicons.org/n26?viewbox=auto"
            ],
            [
            "title" => "n8n",
            "slug" => "n8n",
            "url" => "https://cdn.simpleicons.org/n8n?viewbox=auto"
            ],
            [
            "title" => "Namebase",
            "slug" => "namebase",
            "url" => "https://cdn.simpleicons.org/namebase?viewbox=auto"
            ],
            [
            "title" => "Namecheap",
            "slug" => "namecheap",
            "url" => "https://cdn.simpleicons.org/namecheap?viewbox=auto"
            ],
            [
            "title" => "NameMC",
            "slug" => "namemc",
            "url" => "https://cdn.simpleicons.org/namemc?viewbox=auto"
            ],
            [
            "title" => "NameSilo",
            "slug" => "namesilo",
            "url" => "https://cdn.simpleicons.org/namesilo?viewbox=auto"
            ],
            [
            "title" => "Namu Wiki",
            "slug" => "namuwiki",
            "url" => "https://cdn.simpleicons.org/namuwiki?viewbox=auto"
            ],
            [
            "title" => "Nano",
            "slug" => "nano",
            "url" => "https://cdn.simpleicons.org/nano?viewbox=auto"
            ],
            [
            "title" => "NASA",
            "slug" => "nasa",
            "url" => "https://cdn.simpleicons.org/nasa?viewbox=auto"
            ],
            [
            "title" => "National Grid",
            "slug" => "nationalgrid",
            "url" => "https://cdn.simpleicons.org/nationalgrid?viewbox=auto"
            ],
            [
            "title" => "National Rail",
            "slug" => "nationalrail",
            "url" => "https://cdn.simpleicons.org/nationalrail?viewbox=auto"
            ],
            [
            "title" => "NativeScript",
            "slug" => "nativescript",
            "url" => "https://cdn.simpleicons.org/nativescript?viewbox=auto"
            ],
            [
            "title" => "NATS.io",
            "slug" => "natsdotio",
            "url" => "https://cdn.simpleicons.org/natsdotio?viewbox=auto"
            ],
            [
            "title" => "Naver",
            "slug" => "naver",
            "url" => "https://cdn.simpleicons.org/naver?viewbox=auto"
            ],
            [
            "title" => "NBA",
            "slug" => "nba",
            "url" => "https://cdn.simpleicons.org/nba?viewbox=auto"
            ],
            [
            "title" => "NBB",
            "slug" => "nbb",
            "url" => "https://cdn.simpleicons.org/nbb?viewbox=auto"
            ],
            [
            "title" => "NBC",
            "slug" => "nbc",
            "url" => "https://cdn.simpleicons.org/nbc?viewbox=auto"
            ],
            [
            "title" => "NDR",
            "slug" => "ndr",
            "url" => "https://cdn.simpleicons.org/ndr?viewbox=auto"
            ],
            [
            "title" => "NEAR",
            "slug" => "near",
            "url" => "https://cdn.simpleicons.org/near?viewbox=auto"
            ],
            [
            "title" => "NEC",
            "slug" => "nec",
            "url" => "https://cdn.simpleicons.org/nec?viewbox=auto"
            ],
            [
            "title" => "Neo4j",
            "slug" => "neo4j",
            "url" => "https://cdn.simpleicons.org/neo4j?viewbox=auto"
            ],
            [
            "title" => "Neovim",
            "slug" => "neovim",
            "url" => "https://cdn.simpleicons.org/neovim?viewbox=auto"
            ],
            [
            "title" => "Neptune",
            "slug" => "neptune",
            "url" => "https://cdn.simpleicons.org/neptune?viewbox=auto"
            ],
            [
            "title" => "NestJS",
            "slug" => "nestjs",
            "url" => "https://cdn.simpleicons.org/nestjs?viewbox=auto"
            ],
            [
            "title" => "NetApp",
            "slug" => "netapp",
            "url" => "https://cdn.simpleicons.org/netapp?viewbox=auto"
            ],
            [
            "title" => "NetBSD",
            "slug" => "netbsd",
            "url" => "https://cdn.simpleicons.org/netbsd?viewbox=auto"
            ],
            [
            "title" => "netcup",
            "slug" => "netcup",
            "url" => "https://cdn.simpleicons.org/netcup?viewbox=auto"
            ],
            [
            "title" => "Netdata",
            "slug" => "netdata",
            "url" => "https://cdn.simpleicons.org/netdata?viewbox=auto"
            ],
            [
            "title" => "NetEase Cloud Music",
            "slug" => "neteasecloudmusic",
            "url" => "https://cdn.simpleicons.org/neteasecloudmusic?viewbox=auto"
            ],
            [
            "title" => "Netflix",
            "slug" => "netflix",
            "url" => "https://cdn.simpleicons.org/netflix?viewbox=auto"
            ],
            [
            "title" => "NETGEAR",
            "slug" => "netgear",
            "url" => "https://cdn.simpleicons.org/netgear?viewbox=auto"
            ],
            [
            "title" => "Netlify",
            "slug" => "netlify",
            "url" => "https://cdn.simpleicons.org/netlify?viewbox=auto"
            ],
            [
            "title" => "Nette",
            "slug" => "nette",
            "url" => "https://cdn.simpleicons.org/nette?viewbox=auto"
            ],
            [
            "title" => "Netto",
            "slug" => "netto",
            "url" => "https://cdn.simpleicons.org/netto?viewbox=auto"
            ],
            [
            "title" => "Neutralinojs",
            "slug" => "neutralinojs",
            "url" => "https://cdn.simpleicons.org/neutralinojs?viewbox=auto"
            ],
            [
            "title" => "New Balance",
            "slug" => "newbalance",
            "url" => "https://cdn.simpleicons.org/newbalance?viewbox=auto"
            ],
            [
            "title" => "New Japan Pro-Wrestling",
            "slug" => "newjapanprowrestling",
            "url" => "https://cdn.simpleicons.org/newjapanprowrestling?viewbox=auto"
            ],
            [
            "title" => "New Relic",
            "slug" => "newrelic",
            "url" => "https://cdn.simpleicons.org/newrelic?viewbox=auto"
            ],
            [
            "title" => "New York Times",
            "slug" => "newyorktimes",
            "url" => "https://cdn.simpleicons.org/newyorktimes?viewbox=auto"
            ],
            [
            "title" => "Newegg",
            "slug" => "newegg",
            "url" => "https://cdn.simpleicons.org/newegg?viewbox=auto"
            ],
            [
            "title" => "Next.js",
            "slug" => "nextdotjs",
            "url" => "https://cdn.simpleicons.org/nextdotjs?viewbox=auto"
            ],
            [
            "title" => "NextBillion.ai",
            "slug" => "nextbilliondotai",
            "url" => "https://cdn.simpleicons.org/nextbilliondotai?viewbox=auto"
            ],
            [
            "title" => "Nextcloud",
            "slug" => "nextcloud",
            "url" => "https://cdn.simpleicons.org/nextcloud?viewbox=auto"
            ],
            [
            "title" => "NextDNS",
            "slug" => "nextdns",
            "url" => "https://cdn.simpleicons.org/nextdns?viewbox=auto"
            ],
            [
            "title" => "Nextdoor",
            "slug" => "nextdoor",
            "url" => "https://cdn.simpleicons.org/nextdoor?viewbox=auto"
            ],
            [
            "title" => "Nextra",
            "slug" => "nextra",
            "url" => "https://cdn.simpleicons.org/nextra?viewbox=auto"
            ],
            [
            "title" => "NextUI",
            "slug" => "nextui",
            "url" => "https://cdn.simpleicons.org/nextui?viewbox=auto"
            ],
            [
            "title" => "Nexus Mods",
            "slug" => "nexusmods",
            "url" => "https://cdn.simpleicons.org/nexusmods?viewbox=auto"
            ],
            [
            "title" => "NFC",
            "slug" => "nfc",
            "url" => "https://cdn.simpleicons.org/nfc?viewbox=auto"
            ],
            [
            "title" => "NGINX",
            "slug" => "nginx",
            "url" => "https://cdn.simpleicons.org/nginx?viewbox=auto"
            ],
            [
            "title" => "Nginx Proxy Manager",
            "slug" => "nginxproxymanager",
            "url" => "https://cdn.simpleicons.org/nginxproxymanager?viewbox=auto"
            ],
            [
            "title" => "ngrok",
            "slug" => "ngrok",
            "url" => "https://cdn.simpleicons.org/ngrok?viewbox=auto"
            ],
            [
            "title" => "NgRx",
            "slug" => "ngrx",
            "url" => "https://cdn.simpleicons.org/ngrx?viewbox=auto"
            ],
            [
            "title" => "NHL",
            "slug" => "nhl",
            "url" => "https://cdn.simpleicons.org/nhl?viewbox=auto"
            ],
            [
            "title" => "niconico",
            "slug" => "niconico",
            "url" => "https://cdn.simpleicons.org/niconico?viewbox=auto"
            ],
            [
            "title" => "Nike",
            "slug" => "nike",
            "url" => "https://cdn.simpleicons.org/nike?viewbox=auto"
            ],
            [
            "title" => "Nikon",
            "slug" => "nikon",
            "url" => "https://cdn.simpleicons.org/nikon?viewbox=auto"
            ],
            [
            "title" => "Nim",
            "slug" => "nim",
            "url" => "https://cdn.simpleicons.org/nim?viewbox=auto"
            ],
            [
            "title" => "Nintendo",
            "slug" => "nintendo",
            "url" => "https://cdn.simpleicons.org/nintendo?viewbox=auto"
            ],
            [
            "title" => "Nintendo 3DS",
            "slug" => "nintendo3ds",
            "url" => "https://cdn.simpleicons.org/nintendo3ds?viewbox=auto"
            ],
            [
            "title" => "Nintendo GameCube",
            "slug" => "nintendogamecube",
            "url" => "https://cdn.simpleicons.org/nintendogamecube?viewbox=auto"
            ],
            [
            "title" => "Nintendo Switch",
            "slug" => "nintendoswitch",
            "url" => "https://cdn.simpleicons.org/nintendoswitch?viewbox=auto"
            ],
            [
            "title" => "Nissan",
            "slug" => "nissan",
            "url" => "https://cdn.simpleicons.org/nissan?viewbox=auto"
            ],
            [
            "title" => "NixOS",
            "slug" => "nixos",
            "url" => "https://cdn.simpleicons.org/nixos?viewbox=auto"
            ],
            [
            "title" => "Node-RED",
            "slug" => "nodered",
            "url" => "https://cdn.simpleicons.org/nodered?viewbox=auto"
            ],
            [
            "title" => "Node.js",
            "slug" => "nodedotjs",
            "url" => "https://cdn.simpleicons.org/nodedotjs?viewbox=auto"
            ],
            [
            "title" => "Nodemon",
            "slug" => "nodemon",
            "url" => "https://cdn.simpleicons.org/nodemon?viewbox=auto"
            ],
            [
            "title" => "Nokia",
            "slug" => "nokia",
            "url" => "https://cdn.simpleicons.org/nokia?viewbox=auto"
            ],
            [
            "title" => "Nomad",
            "slug" => "nomad",
            "url" => "https://cdn.simpleicons.org/nomad?viewbox=auto"
            ],
            [
            "title" => "Norco",
            "slug" => "norco",
            "url" => "https://cdn.simpleicons.org/norco?viewbox=auto"
            ],
            [
            "title" => "Nordic Semiconductor",
            "slug" => "nordicsemiconductor",
            "url" => "https://cdn.simpleicons.org/nordicsemiconductor?viewbox=auto"
            ],
            [
            "title" => "NordVPN",
            "slug" => "nordvpn",
            "url" => "https://cdn.simpleicons.org/nordvpn?viewbox=auto"
            ],
            [
            "title" => "Normalize.css",
            "slug" => "normalizedotcss",
            "url" => "https://cdn.simpleicons.org/normalizedotcss?viewbox=auto"
            ],
            [
            "title" => "Norton",
            "slug" => "norton",
            "url" => "https://cdn.simpleicons.org/norton?viewbox=auto"
            ],
            [
            "title" => "Norwegian",
            "slug" => "norwegian",
            "url" => "https://cdn.simpleicons.org/norwegian?viewbox=auto"
            ],
            [
            "title" => "Notepad++",
            "slug" => "notepadplusplus",
            "url" => "https://cdn.simpleicons.org/notepadplusplus?viewbox=auto"
            ],
            [
            "title" => "Notion",
            "slug" => "notion",
            "url" => "https://cdn.simpleicons.org/notion?viewbox=auto"
            ],
            [
            "title" => "Notist",
            "slug" => "notist",
            "url" => "https://cdn.simpleicons.org/notist?viewbox=auto"
            ],
            [
            "title" => "Noun Project",
            "slug" => "nounproject",
            "url" => "https://cdn.simpleicons.org/nounproject?viewbox=auto"
            ],
            [
            "title" => "Novu",
            "slug" => "novu",
            "url" => "https://cdn.simpleicons.org/novu?viewbox=auto"
            ],
            [
            "title" => "NOW",
            "slug" => "now",
            "url" => "https://cdn.simpleicons.org/now?viewbox=auto"
            ],
            [
            "title" => "npm",
            "slug" => "npm",
            "url" => "https://cdn.simpleicons.org/npm?viewbox=auto"
            ],
            [
            "title" => "Nrwl",
            "slug" => "nrwl",
            "url" => "https://cdn.simpleicons.org/nrwl?viewbox=auto"
            ],
            [
            "title" => "NSIS",
            "slug" => "nsis",
            "url" => "https://cdn.simpleicons.org/nsis?viewbox=auto"
            ],
            [
            "title" => "Nubank",
            "slug" => "nubank",
            "url" => "https://cdn.simpleicons.org/nubank?viewbox=auto"
            ],
            [
            "title" => "Nucleo",
            "slug" => "nucleo",
            "url" => "https://cdn.simpleicons.org/nucleo?viewbox=auto"
            ],
            [
            "title" => "NuGet",
            "slug" => "nuget",
            "url" => "https://cdn.simpleicons.org/nuget?viewbox=auto"
            ],
            [
            "title" => "Nuke",
            "slug" => "nuke",
            "url" => "https://cdn.simpleicons.org/nuke?viewbox=auto"
            ],
            [
            "title" => "Numba",
            "slug" => "numba",
            "url" => "https://cdn.simpleicons.org/numba?viewbox=auto"
            ],
            [
            "title" => "NumPy",
            "slug" => "numpy",
            "url" => "https://cdn.simpleicons.org/numpy?viewbox=auto"
            ],
            [
            "title" => "Nunjucks",
            "slug" => "nunjucks",
            "url" => "https://cdn.simpleicons.org/nunjucks?viewbox=auto"
            ],
            [
            "title" => "Nushell",
            "slug" => "nushell",
            "url" => "https://cdn.simpleicons.org/nushell?viewbox=auto"
            ],
            [
            "title" => "Nutanix",
            "slug" => "nutanix",
            "url" => "https://cdn.simpleicons.org/nutanix?viewbox=auto"
            ],
            [
            "title" => "Nuxt.js",
            "slug" => "nuxtdotjs",
            "url" => "https://cdn.simpleicons.org/nuxtdotjs?viewbox=auto"
            ],
            [
            "title" => "NVIDIA",
            "slug" => "nvidia",
            "url" => "https://cdn.simpleicons.org/nvidia?viewbox=auto"
            ],
            [
            "title" => "nvm",
            "slug" => "nvm",
            "url" => "https://cdn.simpleicons.org/nvm?viewbox=auto"
            ],
            [
            "title" => "Nx",
            "slug" => "nx",
            "url" => "https://cdn.simpleicons.org/nx?viewbox=auto"
            ],
            [
            "title" => "NXP",
            "slug" => "nxp",
            "url" => "https://cdn.simpleicons.org/nxp?viewbox=auto"
            ],
            [
            "title" => "NZXT",
            "slug" => "nzxt",
            "url" => "https://cdn.simpleicons.org/nzxt?viewbox=auto"
            ],
            [
            "title" => "O'Reilly",
            "slug" => "oreilly",
            "url" => "https://cdn.simpleicons.org/oreilly?viewbox=auto"
            ],
            [
            "title" => "OBS Studio",
            "slug" => "obsstudio",
            "url" => "https://cdn.simpleicons.org/obsstudio?viewbox=auto"
            ],
            [
            "title" => "Observable",
            "slug" => "observable",
            "url" => "https://cdn.simpleicons.org/observable?viewbox=auto"
            ],
            [
            "title" => "Obsidian",
            "slug" => "obsidian",
            "url" => "https://cdn.simpleicons.org/obsidian?viewbox=auto"
            ],
            [
            "title" => "OCaml",
            "slug" => "ocaml",
            "url" => "https://cdn.simpleicons.org/ocaml?viewbox=auto"
            ],
            [
            "title" => "oclif",
            "slug" => "oclif",
            "url" => "https://cdn.simpleicons.org/oclif?viewbox=auto"
            ],
            [
            "title" => "Octane Render",
            "slug" => "octanerender",
            "url" => "https://cdn.simpleicons.org/octanerender?viewbox=auto"
            ],
            [
            "title" => "Octave",
            "slug" => "octave",
            "url" => "https://cdn.simpleicons.org/octave?viewbox=auto"
            ],
            [
            "title" => "October CMS",
            "slug" => "octobercms",
            "url" => "https://cdn.simpleicons.org/octobercms?viewbox=auto"
            ],
            [
            "title" => "OctoPrint",
            "slug" => "octoprint",
            "url" => "https://cdn.simpleicons.org/octoprint?viewbox=auto"
            ],
            [
            "title" => "Octopus Deploy",
            "slug" => "octopusdeploy",
            "url" => "https://cdn.simpleicons.org/octopusdeploy?viewbox=auto"
            ],
            [
            "title" => "Oculus",
            "slug" => "oculus",
            "url" => "https://cdn.simpleicons.org/oculus?viewbox=auto"
            ],
            [
            "title" => "Odnoklassniki",
            "slug" => "odnoklassniki",
            "url" => "https://cdn.simpleicons.org/odnoklassniki?viewbox=auto"
            ],
            [
            "title" => "Odoo",
            "slug" => "odoo",
            "url" => "https://cdn.simpleicons.org/odoo?viewbox=auto"
            ],
            [
            "title" => "Odysee",
            "slug" => "odysee",
            "url" => "https://cdn.simpleicons.org/odysee?viewbox=auto"
            ],
            [
            "title" => "Oh Dear",
            "slug" => "ohdear",
            "url" => "https://cdn.simpleicons.org/ohdear?viewbox=auto"
            ],
            [
            "title" => "okcupid",
            "slug" => "okcupid",
            "url" => "https://cdn.simpleicons.org/okcupid?viewbox=auto"
            ],
            [
            "title" => "Okta",
            "slug" => "okta",
            "url" => "https://cdn.simpleicons.org/okta?viewbox=auto"
            ],
            [
            "title" => "OnePlus",
            "slug" => "oneplus",
            "url" => "https://cdn.simpleicons.org/oneplus?viewbox=auto"
            ],
            [
            "title" => "OnlyFans",
            "slug" => "onlyfans",
            "url" => "https://cdn.simpleicons.org/onlyfans?viewbox=auto"
            ],
            [
            "title" => "ONLYOFFICE",
            "slug" => "onlyoffice",
            "url" => "https://cdn.simpleicons.org/onlyoffice?viewbox=auto"
            ],
            [
            "title" => "ONNX",
            "slug" => "onnx",
            "url" => "https://cdn.simpleicons.org/onnx?viewbox=auto"
            ],
            [
            "title" => "OnStar",
            "slug" => "onstar",
            "url" => "https://cdn.simpleicons.org/onstar?viewbox=auto"
            ],
            [
            "title" => "Opel",
            "slug" => "opel",
            "url" => "https://cdn.simpleicons.org/opel?viewbox=auto"
            ],
            [
            "title" => "Open Access",
            "slug" => "openaccess",
            "url" => "https://cdn.simpleicons.org/openaccess?viewbox=auto"
            ],
            [
            "title" => "Open Badges",
            "slug" => "openbadges",
            "url" => "https://cdn.simpleicons.org/openbadges?viewbox=auto"
            ],
            [
            "title" => "Open Bug Bounty",
            "slug" => "openbugbounty",
            "url" => "https://cdn.simpleicons.org/openbugbounty?viewbox=auto"
            ],
            [
            "title" => "Open Collective",
            "slug" => "opencollective",
            "url" => "https://cdn.simpleicons.org/opencollective?viewbox=auto"
            ],
            [
            "title" => "Open Containers Initiative",
            "slug" => "opencontainersinitiative",
            "url" => "https://cdn.simpleicons.org/opencontainersinitiative?viewbox=auto"
            ],
            [
            "title" => "Open Source Hardware",
            "slug" => "opensourcehardware",
            "url" => "https://cdn.simpleicons.org/opensourcehardware?viewbox=auto"
            ],
            [
            "title" => "Open Source Initiative",
            "slug" => "opensourceinitiative",
            "url" => "https://cdn.simpleicons.org/opensourceinitiative?viewbox=auto"
            ],
            [
            "title" => "OpenAI",
            "slug" => "openai",
            "url" => "https://cdn.simpleicons.org/openai?viewbox=auto"
            ],
            [
            "title" => "OpenAI Gym",
            "slug" => "openaigym",
            "url" => "https://cdn.simpleicons.org/openaigym?viewbox=auto"
            ],
            [
            "title" => "OpenAPI Initiative",
            "slug" => "openapiinitiative",
            "url" => "https://cdn.simpleicons.org/openapiinitiative?viewbox=auto"
            ],
            [
            "title" => "OpenBSD",
            "slug" => "openbsd",
            "url" => "https://cdn.simpleicons.org/openbsd?viewbox=auto"
            ],
            [
            "title" => "OpenCV",
            "slug" => "opencv",
            "url" => "https://cdn.simpleicons.org/opencv?viewbox=auto"
            ],
            [
            "title" => "OpenFaaS",
            "slug" => "openfaas",
            "url" => "https://cdn.simpleicons.org/openfaas?viewbox=auto"
            ],
            [
            "title" => "OpenGL",
            "slug" => "opengl",
            "url" => "https://cdn.simpleicons.org/opengl?viewbox=auto"
            ],
            [
            "title" => "openHAB",
            "slug" => "openhab",
            "url" => "https://cdn.simpleicons.org/openhab?viewbox=auto"
            ],
            [
            "title" => "OpenID",
            "slug" => "openid",
            "url" => "https://cdn.simpleicons.org/openid?viewbox=auto"
            ],
            [
            "title" => "OpenJDK",
            "slug" => "openjdk",
            "url" => "https://cdn.simpleicons.org/openjdk?viewbox=auto"
            ],
            [
            "title" => "OpenJS Foundation",
            "slug" => "openjsfoundation",
            "url" => "https://cdn.simpleicons.org/openjsfoundation?viewbox=auto"
            ],
            [
            "title" => "Openlayers",
            "slug" => "openlayers",
            "url" => "https://cdn.simpleicons.org/openlayers?viewbox=auto"
            ],
            [
            "title" => "openmediavault",
            "slug" => "openmediavault",
            "url" => "https://cdn.simpleicons.org/openmediavault?viewbox=auto"
            ],
            [
            "title" => "OpenMined",
            "slug" => "openmined",
            "url" => "https://cdn.simpleicons.org/openmined?viewbox=auto"
            ],
            [
            "title" => "OpenNebula",
            "slug" => "opennebula",
            "url" => "https://cdn.simpleicons.org/opennebula?viewbox=auto"
            ],
            [
            "title" => "OpenProject",
            "slug" => "openproject",
            "url" => "https://cdn.simpleicons.org/openproject?viewbox=auto"
            ],
            [
            "title" => "OpenSCAD",
            "slug" => "openscad",
            "url" => "https://cdn.simpleicons.org/openscad?viewbox=auto"
            ],
            [
            "title" => "OpenSea",
            "slug" => "opensea",
            "url" => "https://cdn.simpleicons.org/opensea?viewbox=auto"
            ],
            [
            "title" => "OpenSearch",
            "slug" => "opensearch",
            "url" => "https://cdn.simpleicons.org/opensearch?viewbox=auto"
            ],
            [
            "title" => "OpenSSL",
            "slug" => "openssl",
            "url" => "https://cdn.simpleicons.org/openssl?viewbox=auto"
            ],
            [
            "title" => "OpenStack",
            "slug" => "openstack",
            "url" => "https://cdn.simpleicons.org/openstack?viewbox=auto"
            ],
            [
            "title" => "OpenStreetMap",
            "slug" => "openstreetmap",
            "url" => "https://cdn.simpleicons.org/openstreetmap?viewbox=auto"
            ],
            [
            "title" => "openSUSE",
            "slug" => "opensuse",
            "url" => "https://cdn.simpleicons.org/opensuse?viewbox=auto"
            ],
            [
            "title" => "OpenTelemetry",
            "slug" => "opentelemetry",
            "url" => "https://cdn.simpleicons.org/opentelemetry?viewbox=auto"
            ],
            [
            "title" => "OpenText",
            "slug" => "opentext",
            "url" => "https://cdn.simpleicons.org/opentext?viewbox=auto"
            ],
            [
            "title" => "OpenTofu",
            "slug" => "opentofu",
            "url" => "https://cdn.simpleicons.org/opentofu?viewbox=auto"
            ],
            [
            "title" => "Openverse",
            "slug" => "openverse",
            "url" => "https://cdn.simpleicons.org/openverse?viewbox=auto"
            ],
            [
            "title" => "OpenVPN",
            "slug" => "openvpn",
            "url" => "https://cdn.simpleicons.org/openvpn?viewbox=auto"
            ],
            [
            "title" => "OpenWrt",
            "slug" => "openwrt",
            "url" => "https://cdn.simpleicons.org/openwrt?viewbox=auto"
            ],
            [
            "title" => "OpenZeppelin",
            "slug" => "openzeppelin",
            "url" => "https://cdn.simpleicons.org/openzeppelin?viewbox=auto"
            ],
            [
            "title" => "OpenZFS",
            "slug" => "openzfs",
            "url" => "https://cdn.simpleicons.org/openzfs?viewbox=auto"
            ],
            [
            "title" => "Opera",
            "slug" => "opera",
            "url" => "https://cdn.simpleicons.org/opera?viewbox=auto"
            ],
            [
            "title" => "Opera GX",
            "slug" => "operagx",
            "url" => "https://cdn.simpleicons.org/operagx?viewbox=auto"
            ],
            [
            "title" => "OPNSense",
            "slug" => "opnsense",
            "url" => "https://cdn.simpleicons.org/opnsense?viewbox=auto"
            ],
            [
            "title" => "OPPO",
            "slug" => "oppo",
            "url" => "https://cdn.simpleicons.org/oppo?viewbox=auto"
            ],
            [
            "title" => "Opsgenie",
            "slug" => "opsgenie",
            "url" => "https://cdn.simpleicons.org/opsgenie?viewbox=auto"
            ],
            [
            "title" => "OpsLevel",
            "slug" => "opslevel",
            "url" => "https://cdn.simpleicons.org/opslevel?viewbox=auto"
            ],
            [
            "title" => "Optimism",
            "slug" => "optimism",
            "url" => "https://cdn.simpleicons.org/optimism?viewbox=auto"
            ],
            [
            "title" => "Oracle",
            "slug" => "oracle",
            "url" => "https://cdn.simpleicons.org/oracle?viewbox=auto"
            ],
            [
            "title" => "Orange",
            "slug" => "orange",
            "url" => "https://cdn.simpleicons.org/orange?viewbox=auto"
            ],
            [
            "title" => "ORCID",
            "slug" => "orcid",
            "url" => "https://cdn.simpleicons.org/orcid?viewbox=auto"
            ],
            [
            "title" => "Org",
            "slug" => "org",
            "url" => "https://cdn.simpleicons.org/org?viewbox=auto"
            ],
            [
            "title" => "Origin",
            "slug" => "origin",
            "url" => "https://cdn.simpleicons.org/origin?viewbox=auto"
            ],
            [
            "title" => "Osano",
            "slug" => "osano",
            "url" => "https://cdn.simpleicons.org/osano?viewbox=auto"
            ],
            [
            "title" => "OSF",
            "slug" => "osf",
            "url" => "https://cdn.simpleicons.org/osf?viewbox=auto"
            ],
            [
            "title" => "OSGeo",
            "slug" => "osgeo",
            "url" => "https://cdn.simpleicons.org/osgeo?viewbox=auto"
            ],
            [
            "title" => "Oshkosh",
            "slug" => "oshkosh",
            "url" => "https://cdn.simpleicons.org/oshkosh?viewbox=auto"
            ],
            [
            "title" => "OSMC",
            "slug" => "osmc",
            "url" => "https://cdn.simpleicons.org/osmc?viewbox=auto"
            ],
            [
            "title" => "osu!",
            "slug" => "osu",
            "url" => "https://cdn.simpleicons.org/osu?viewbox=auto"
            ],
            [
            "title" => "Otto",
            "slug" => "otto",
            "url" => "https://cdn.simpleicons.org/otto?viewbox=auto"
            ],
            [
            "title" => "Overcast",
            "slug" => "overcast",
            "url" => "https://cdn.simpleicons.org/overcast?viewbox=auto"
            ],
            [
            "title" => "Overleaf",
            "slug" => "overleaf",
            "url" => "https://cdn.simpleicons.org/overleaf?viewbox=auto"
            ],
            [
            "title" => "OVH",
            "slug" => "ovh",
            "url" => "https://cdn.simpleicons.org/ovh?viewbox=auto"
            ],
            [
            "title" => "OWASP",
            "slug" => "owasp",
            "url" => "https://cdn.simpleicons.org/owasp?viewbox=auto"
            ],
            [
            "title" => "OWASP Dependency-Check",
            "slug" => "owaspdependencycheck",
            "url" => "https://cdn.simpleicons.org/owaspdependencycheck?viewbox=auto"
            ],
            [
            "title" => "ownCloud",
            "slug" => "owncloud",
            "url" => "https://cdn.simpleicons.org/owncloud?viewbox=auto"
            ],
            [
            "title" => "Oxygen",
            "slug" => "oxygen",
            "url" => "https://cdn.simpleicons.org/oxygen?viewbox=auto"
            ],
            [
            "title" => "OYO",
            "slug" => "oyo",
            "url" => "https://cdn.simpleicons.org/oyo?viewbox=auto"
            ],
            [
            "title" => "p5.js",
            "slug" => "p5dotjs",
            "url" => "https://cdn.simpleicons.org/p5dotjs?viewbox=auto"
            ],
            [
            "title" => "Packagist",
            "slug" => "packagist",
            "url" => "https://cdn.simpleicons.org/packagist?viewbox=auto"
            ],
            [
            "title" => "Packer",
            "slug" => "packer",
            "url" => "https://cdn.simpleicons.org/packer?viewbox=auto"
            ],
            [
            "title" => "Packt",
            "slug" => "packt",
            "url" => "https://cdn.simpleicons.org/packt?viewbox=auto"
            ],
            [
            "title" => "Paddle",
            "slug" => "paddle",
            "url" => "https://cdn.simpleicons.org/paddle?viewbox=auto"
            ],
            [
            "title" => "PaddlePaddle",
            "slug" => "paddlepaddle",
            "url" => "https://cdn.simpleicons.org/paddlepaddle?viewbox=auto"
            ],
            [
            "title" => "Paddy Power",
            "slug" => "paddypower",
            "url" => "https://cdn.simpleicons.org/paddypower?viewbox=auto"
            ],
            [
            "title" => "Pagekit",
            "slug" => "pagekit",
            "url" => "https://cdn.simpleicons.org/pagekit?viewbox=auto"
            ],
            [
            "title" => "PagerDuty",
            "slug" => "pagerduty",
            "url" => "https://cdn.simpleicons.org/pagerduty?viewbox=auto"
            ],
            [
            "title" => "PageSpeed Insights",
            "slug" => "pagespeedinsights",
            "url" => "https://cdn.simpleicons.org/pagespeedinsights?viewbox=auto"
            ],
            [
            "title" => "PagSeguro",
            "slug" => "pagseguro",
            "url" => "https://cdn.simpleicons.org/pagseguro?viewbox=auto"
            ],
            [
            "title" => "Palantir",
            "slug" => "palantir",
            "url" => "https://cdn.simpleicons.org/palantir?viewbox=auto"
            ],
            [
            "title" => "Palo Alto Networks",
            "slug" => "paloaltonetworks",
            "url" => "https://cdn.simpleicons.org/paloaltonetworks?viewbox=auto"
            ],
            [
            "title" => "Palo Alto Software",
            "slug" => "paloaltosoftware",
            "url" => "https://cdn.simpleicons.org/paloaltosoftware?viewbox=auto"
            ],
            [
            "title" => "Panasonic",
            "slug" => "panasonic",
            "url" => "https://cdn.simpleicons.org/panasonic?viewbox=auto"
            ],
            [
            "title" => "pandas",
            "slug" => "pandas",
            "url" => "https://cdn.simpleicons.org/pandas?viewbox=auto"
            ],
            [
            "title" => "Pandora",
            "slug" => "pandora",
            "url" => "https://cdn.simpleicons.org/pandora?viewbox=auto"
            ],
            [
            "title" => "Pantheon",
            "slug" => "pantheon",
            "url" => "https://cdn.simpleicons.org/pantheon?viewbox=auto"
            ],
            [
            "title" => "Paperless-ngx",
            "slug" => "paperlessngx",
            "url" => "https://cdn.simpleicons.org/paperlessngx?viewbox=auto"
            ],
            [
            "title" => "Papers With Code",
            "slug" => "paperswithcode",
            "url" => "https://cdn.simpleicons.org/paperswithcode?viewbox=auto"
            ],
            [
            "title" => "Paperspace",
            "slug" => "paperspace",
            "url" => "https://cdn.simpleicons.org/paperspace?viewbox=auto"
            ],
            [
            "title" => "Paramount+",
            "slug" => "paramountplus",
            "url" => "https://cdn.simpleicons.org/paramountplus?viewbox=auto"
            ],
            [
            "title" => "Parity Substrate",
            "slug" => "paritysubstrate",
            "url" => "https://cdn.simpleicons.org/paritysubstrate?viewbox=auto"
            ],
            [
            "title" => "Parrot Security",
            "slug" => "parrotsecurity",
            "url" => "https://cdn.simpleicons.org/parrotsecurity?viewbox=auto"
            ],
            [
            "title" => "Parse.ly",
            "slug" => "parsedotly",
            "url" => "https://cdn.simpleicons.org/parsedotly?viewbox=auto"
            ],
            [
            "title" => "Passport",
            "slug" => "passport",
            "url" => "https://cdn.simpleicons.org/passport?viewbox=auto"
            ],
            [
            "title" => "Pastebin",
            "slug" => "pastebin",
            "url" => "https://cdn.simpleicons.org/pastebin?viewbox=auto"
            ],
            [
            "title" => "Patreon",
            "slug" => "patreon",
            "url" => "https://cdn.simpleicons.org/patreon?viewbox=auto"
            ],
            [
            "title" => "Paychex",
            "slug" => "paychex",
            "url" => "https://cdn.simpleicons.org/paychex?viewbox=auto"
            ],
            [
            "title" => "Payhip",
            "slug" => "payhip",
            "url" => "https://cdn.simpleicons.org/payhip?viewbox=auto"
            ],
            [
            "title" => "Payload CMS",
            "slug" => "payloadcms",
            "url" => "https://cdn.simpleicons.org/payloadcms?viewbox=auto"
            ],
            [
            "title" => "Payoneer",
            "slug" => "payoneer",
            "url" => "https://cdn.simpleicons.org/payoneer?viewbox=auto"
            ],
            [
            "title" => "PayPal",
            "slug" => "paypal",
            "url" => "https://cdn.simpleicons.org/paypal?viewbox=auto"
            ],
            [
            "title" => "Paytm",
            "slug" => "paytm",
            "url" => "https://cdn.simpleicons.org/paytm?viewbox=auto"
            ],
            [
            "title" => "PCGamingWiki",
            "slug" => "pcgamingwiki",
            "url" => "https://cdn.simpleicons.org/pcgamingwiki?viewbox=auto"
            ],
            [
            "title" => "PDM",
            "slug" => "pdm",
            "url" => "https://cdn.simpleicons.org/pdm?viewbox=auto"
            ],
            [
            "title" => "PDQ",
            "slug" => "pdq",
            "url" => "https://cdn.simpleicons.org/pdq?viewbox=auto"
            ],
            [
            "title" => "Peak Design",
            "slug" => "peakdesign",
            "url" => "https://cdn.simpleicons.org/peakdesign?viewbox=auto"
            ],
            [
            "title" => "Pearson",
            "slug" => "pearson",
            "url" => "https://cdn.simpleicons.org/pearson?viewbox=auto"
            ],
            [
            "title" => "Peerlist",
            "slug" => "peerlist",
            "url" => "https://cdn.simpleicons.org/peerlist?viewbox=auto"
            ],
            [
            "title" => "PeerTube",
            "slug" => "peertube",
            "url" => "https://cdn.simpleicons.org/peertube?viewbox=auto"
            ],
            [
            "title" => "Pegasus Airlines",
            "slug" => "pegasusairlines",
            "url" => "https://cdn.simpleicons.org/pegasusairlines?viewbox=auto"
            ],
            [
            "title" => "Pelican",
            "slug" => "pelican",
            "url" => "https://cdn.simpleicons.org/pelican?viewbox=auto"
            ],
            [
            "title" => "Peloton",
            "slug" => "peloton",
            "url" => "https://cdn.simpleicons.org/peloton?viewbox=auto"
            ],
            [
            "title" => "Penny",
            "slug" => "penny",
            "url" => "https://cdn.simpleicons.org/penny?viewbox=auto"
            ],
            [
            "title" => "Penpot",
            "slug" => "penpot",
            "url" => "https://cdn.simpleicons.org/penpot?viewbox=auto"
            ],
            [
            "title" => "Percy",
            "slug" => "percy",
            "url" => "https://cdn.simpleicons.org/percy?viewbox=auto"
            ],
            [
            "title" => "Perforce",
            "slug" => "perforce",
            "url" => "https://cdn.simpleicons.org/perforce?viewbox=auto"
            ],
            [
            "title" => "Perl",
            "slug" => "perl",
            "url" => "https://cdn.simpleicons.org/perl?viewbox=auto"
            ],
            [
            "title" => "Perplexity",
            "slug" => "perplexity",
            "url" => "https://cdn.simpleicons.org/perplexity?viewbox=auto"
            ],
            [
            "title" => "Persistent",
            "slug" => "persistent",
            "url" => "https://cdn.simpleicons.org/persistent?viewbox=auto"
            ],
            [
            "title" => "Personio",
            "slug" => "personio",
            "url" => "https://cdn.simpleicons.org/personio?viewbox=auto"
            ],
            [
            "title" => "Pets at Home",
            "slug" => "petsathome",
            "url" => "https://cdn.simpleicons.org/petsathome?viewbox=auto"
            ],
            [
            "title" => "Peugeot",
            "slug" => "peugeot",
            "url" => "https://cdn.simpleicons.org/peugeot?viewbox=auto"
            ],
            [
            "title" => "Pexels",
            "slug" => "pexels",
            "url" => "https://cdn.simpleicons.org/pexels?viewbox=auto"
            ],
            [
            "title" => "pfSense",
            "slug" => "pfsense",
            "url" => "https://cdn.simpleicons.org/pfsense?viewbox=auto"
            ],
            [
            "title" => "Phabricator",
            "slug" => "phabricator",
            "url" => "https://cdn.simpleicons.org/phabricator?viewbox=auto"
            ],
            [
            "title" => "Philips Hue",
            "slug" => "philipshue",
            "url" => "https://cdn.simpleicons.org/philipshue?viewbox=auto"
            ],
            [
            "title" => "Phoenix Framework",
            "slug" => "phoenixframework",
            "url" => "https://cdn.simpleicons.org/phoenixframework?viewbox=auto"
            ],
            [
            "title" => "PhonePe",
            "slug" => "phonepe",
            "url" => "https://cdn.simpleicons.org/phonepe?viewbox=auto"
            ],
            [
            "title" => "Phosphor Icons",
            "slug" => "phosphoricons",
            "url" => "https://cdn.simpleicons.org/phosphoricons?viewbox=auto"
            ],
            [
            "title" => "Photobucket",
            "slug" => "photobucket",
            "url" => "https://cdn.simpleicons.org/photobucket?viewbox=auto"
            ],
            [
            "title" => "Photocrowd",
            "slug" => "photocrowd",
            "url" => "https://cdn.simpleicons.org/photocrowd?viewbox=auto"
            ],
            [
            "title" => "Photon",
            "slug" => "photon",
            "url" => "https://cdn.simpleicons.org/photon?viewbox=auto"
            ],
            [
            "title" => "Photopea",
            "slug" => "photopea",
            "url" => "https://cdn.simpleicons.org/photopea?viewbox=auto"
            ],
            [
            "title" => "PHP",
            "slug" => "php",
            "url" => "https://cdn.simpleicons.org/php?viewbox=auto"
            ],
            [
            "title" => "phpMyAdmin",
            "slug" => "phpmyadmin",
            "url" => "https://cdn.simpleicons.org/phpmyadmin?viewbox=auto"
            ],
            [
            "title" => "PhpStorm",
            "slug" => "phpstorm",
            "url" => "https://cdn.simpleicons.org/phpstorm?viewbox=auto"
            ],
            [
            "title" => "Pi Network",
            "slug" => "pinetwork",
            "url" => "https://cdn.simpleicons.org/pinetwork?viewbox=auto"
            ],
            [
            "title" => "Pi-hole",
            "slug" => "pihole",
            "url" => "https://cdn.simpleicons.org/pihole?viewbox=auto"
            ],
            [
            "title" => "Piaggio Group",
            "slug" => "piaggiogroup",
            "url" => "https://cdn.simpleicons.org/piaggiogroup?viewbox=auto"
            ],
            [
            "title" => "Piapro",
            "slug" => "piapro",
            "url" => "https://cdn.simpleicons.org/piapro?viewbox=auto"
            ],
            [
            "title" => "Picard Surgelés",
            "slug" => "picardsurgeles",
            "url" => "https://cdn.simpleicons.org/picardsurgeles?viewbox=auto"
            ],
            [
            "title" => "Picarto.TV",
            "slug" => "picartodottv",
            "url" => "https://cdn.simpleicons.org/picartodottv?viewbox=auto"
            ],
            [
            "title" => "Picnic",
            "slug" => "picnic",
            "url" => "https://cdn.simpleicons.org/picnic?viewbox=auto"
            ],
            [
            "title" => "PicPay",
            "slug" => "picpay",
            "url" => "https://cdn.simpleicons.org/picpay?viewbox=auto"
            ],
            [
            "title" => "Picxy",
            "slug" => "picxy",
            "url" => "https://cdn.simpleicons.org/picxy?viewbox=auto"
            ],
            [
            "title" => "Pimcore",
            "slug" => "pimcore",
            "url" => "https://cdn.simpleicons.org/pimcore?viewbox=auto"
            ],
            [
            "title" => "Pinboard",
            "slug" => "pinboard",
            "url" => "https://cdn.simpleicons.org/pinboard?viewbox=auto"
            ],
            [
            "title" => "Pine Script",
            "slug" => "pinescript",
            "url" => "https://cdn.simpleicons.org/pinescript?viewbox=auto"
            ],
            [
            "title" => "Pingdom",
            "slug" => "pingdom",
            "url" => "https://cdn.simpleicons.org/pingdom?viewbox=auto"
            ],
            [
            "title" => "Pinterest",
            "slug" => "pinterest",
            "url" => "https://cdn.simpleicons.org/pinterest?viewbox=auto"
            ],
            [
            "title" => "Pioneer DJ",
            "slug" => "pioneerdj",
            "url" => "https://cdn.simpleicons.org/pioneerdj?viewbox=auto"
            ],
            [
            "title" => "Piped",
            "slug" => "piped",
            "url" => "https://cdn.simpleicons.org/piped?viewbox=auto"
            ],
            [
            "title" => "pipx",
            "slug" => "pipx",
            "url" => "https://cdn.simpleicons.org/pipx?viewbox=auto"
            ],
            [
            "title" => "Pivotal Tracker",
            "slug" => "pivotaltracker",
            "url" => "https://cdn.simpleicons.org/pivotaltracker?viewbox=auto"
            ],
            [
            "title" => "Piwigo",
            "slug" => "piwigo",
            "url" => "https://cdn.simpleicons.org/piwigo?viewbox=auto"
            ],
            [
            "title" => "Pix",
            "slug" => "pix",
            "url" => "https://cdn.simpleicons.org/pix?viewbox=auto"
            ],
            [
            "title" => "Pixabay",
            "slug" => "pixabay",
            "url" => "https://cdn.simpleicons.org/pixabay?viewbox=auto"
            ],
            [
            "title" => "Pixelfed",
            "slug" => "pixelfed",
            "url" => "https://cdn.simpleicons.org/pixelfed?viewbox=auto"
            ],
            [
            "title" => "pixiv",
            "slug" => "pixiv",
            "url" => "https://cdn.simpleicons.org/pixiv?viewbox=auto"
            ],
            [
            "title" => "Pixlr",
            "slug" => "pixlr",
            "url" => "https://cdn.simpleicons.org/pixlr?viewbox=auto"
            ],
            [
            "title" => "pkgsrc",
            "slug" => "pkgsrc",
            "url" => "https://cdn.simpleicons.org/pkgsrc?viewbox=auto"
            ],
            [
            "title" => "Planet",
            "slug" => "planet",
            "url" => "https://cdn.simpleicons.org/planet?viewbox=auto"
            ],
            [
            "title" => "PlanetScale",
            "slug" => "planetscale",
            "url" => "https://cdn.simpleicons.org/planetscale?viewbox=auto"
            ],
            [
            "title" => "PlanGrid",
            "slug" => "plangrid",
            "url" => "https://cdn.simpleicons.org/plangrid?viewbox=auto"
            ],
            [
            "title" => "Platform.sh",
            "slug" => "platformdotsh",
            "url" => "https://cdn.simpleicons.org/platformdotsh?viewbox=auto"
            ],
            [
            "title" => "PlatformIO",
            "slug" => "platformio",
            "url" => "https://cdn.simpleicons.org/platformio?viewbox=auto"
            ],
            [
            "title" => "Platzi",
            "slug" => "platzi",
            "url" => "https://cdn.simpleicons.org/platzi?viewbox=auto"
            ],
            [
            "title" => "Plausible Analytics",
            "slug" => "plausibleanalytics",
            "url" => "https://cdn.simpleicons.org/plausibleanalytics?viewbox=auto"
            ],
            [
            "title" => "PlayCanvas",
            "slug" => "playcanvas",
            "url" => "https://cdn.simpleicons.org/playcanvas?viewbox=auto"
            ],
            [
            "title" => "Player FM",
            "slug" => "playerfm",
            "url" => "https://cdn.simpleicons.org/playerfm?viewbox=auto"
            ],
            [
            "title" => "Player.me",
            "slug" => "playerdotme",
            "url" => "https://cdn.simpleicons.org/playerdotme?viewbox=auto"
            ],
            [
            "title" => "PlayStation",
            "slug" => "playstation",
            "url" => "https://cdn.simpleicons.org/playstation?viewbox=auto"
            ],
            [
            "title" => "PlayStation 2",
            "slug" => "playstation2",
            "url" => "https://cdn.simpleicons.org/playstation2?viewbox=auto"
            ],
            [
            "title" => "PlayStation 3",
            "slug" => "playstation3",
            "url" => "https://cdn.simpleicons.org/playstation3?viewbox=auto"
            ],
            [
            "title" => "PlayStation 4",
            "slug" => "playstation4",
            "url" => "https://cdn.simpleicons.org/playstation4?viewbox=auto"
            ],
            [
            "title" => "PlayStation 5",
            "slug" => "playstation5",
            "url" => "https://cdn.simpleicons.org/playstation5?viewbox=auto"
            ],
            [
            "title" => "PlayStation Vita",
            "slug" => "playstationvita",
            "url" => "https://cdn.simpleicons.org/playstationvita?viewbox=auto"
            ],
            [
            "title" => "Playwright",
            "slug" => "playwright",
            "url" => "https://cdn.simpleicons.org/playwright?viewbox=auto"
            ],
            [
            "title" => "Pleroma",
            "slug" => "pleroma",
            "url" => "https://cdn.simpleicons.org/pleroma?viewbox=auto"
            ],
            [
            "title" => "Plesk",
            "slug" => "plesk",
            "url" => "https://cdn.simpleicons.org/plesk?viewbox=auto"
            ],
            [
            "title" => "Plex",
            "slug" => "plex",
            "url" => "https://cdn.simpleicons.org/plex?viewbox=auto"
            ],
            [
            "title" => "Plotly",
            "slug" => "plotly",
            "url" => "https://cdn.simpleicons.org/plotly?viewbox=auto"
            ],
            [
            "title" => "Pluralsight",
            "slug" => "pluralsight",
            "url" => "https://cdn.simpleicons.org/pluralsight?viewbox=auto"
            ],
            [
            "title" => "Plurk",
            "slug" => "plurk",
            "url" => "https://cdn.simpleicons.org/plurk?viewbox=auto"
            ],
            [
            "title" => "Plus Codes",
            "slug" => "pluscodes",
            "url" => "https://cdn.simpleicons.org/pluscodes?viewbox=auto"
            ],
            [
            "title" => "PM2",
            "slug" => "pm2",
            "url" => "https://cdn.simpleicons.org/pm2?viewbox=auto"
            ],
            [
            "title" => "pnpm",
            "slug" => "pnpm",
            "url" => "https://cdn.simpleicons.org/pnpm?viewbox=auto"
            ],
            [
            "title" => "Pocket",
            "slug" => "pocket",
            "url" => "https://cdn.simpleicons.org/pocket?viewbox=auto"
            ],
            [
            "title" => "Pocket Casts",
            "slug" => "pocketcasts",
            "url" => "https://cdn.simpleicons.org/pocketcasts?viewbox=auto"
            ],
            [
            "title" => "PocketBase",
            "slug" => "pocketbase",
            "url" => "https://cdn.simpleicons.org/pocketbase?viewbox=auto"
            ],
            [
            "title" => "Podcast Addict",
            "slug" => "podcastaddict",
            "url" => "https://cdn.simpleicons.org/podcastaddict?viewbox=auto"
            ],
            [
            "title" => "Podcast Index",
            "slug" => "podcastindex",
            "url" => "https://cdn.simpleicons.org/podcastindex?viewbox=auto"
            ],
            [
            "title" => "Podman",
            "slug" => "podman",
            "url" => "https://cdn.simpleicons.org/podman?viewbox=auto"
            ],
            [
            "title" => "Poe",
            "slug" => "poe",
            "url" => "https://cdn.simpleicons.org/poe?viewbox=auto"
            ],
            [
            "title" => "Poetry",
            "slug" => "poetry",
            "url" => "https://cdn.simpleicons.org/poetry?viewbox=auto"
            ],
            [
            "title" => "Pointy",
            "slug" => "pointy",
            "url" => "https://cdn.simpleicons.org/pointy?viewbox=auto"
            ],
            [
            "title" => "Pokémon",
            "slug" => "pokemon",
            "url" => "https://cdn.simpleicons.org/pokemon?viewbox=auto"
            ],
            [
            "title" => "Polars",
            "slug" => "polars",
            "url" => "https://cdn.simpleicons.org/polars?viewbox=auto"
            ],
            [
            "title" => "Polestar",
            "slug" => "polestar",
            "url" => "https://cdn.simpleicons.org/polestar?viewbox=auto"
            ],
            [
            "title" => "Polkadot",
            "slug" => "polkadot",
            "url" => "https://cdn.simpleicons.org/polkadot?viewbox=auto"
            ],
            [
            "title" => "Poly",
            "slug" => "poly",
            "url" => "https://cdn.simpleicons.org/poly?viewbox=auto"
            ],
            [
            "title" => "Polygon",
            "slug" => "polygon",
            "url" => "https://cdn.simpleicons.org/polygon?viewbox=auto"
            ],
            [
            "title" => "Polymer Project",
            "slug" => "polymerproject",
            "url" => "https://cdn.simpleicons.org/polymerproject?viewbox=auto"
            ],
            [
            "title" => "Polywork",
            "slug" => "polywork",
            "url" => "https://cdn.simpleicons.org/polywork?viewbox=auto"
            ],
            [
            "title" => "Pond5",
            "slug" => "pond5",
            "url" => "https://cdn.simpleicons.org/pond5?viewbox=auto"
            ],
            [
            "title" => "Pop!_OS",
            "slug" => "popos",
            "url" => "https://cdn.simpleicons.org/popos?viewbox=auto"
            ],
            [
            "title" => "Porkbun",
            "slug" => "porkbun",
            "url" => "https://cdn.simpleicons.org/porkbun?viewbox=auto"
            ],
            [
            "title" => "Porsche",
            "slug" => "porsche",
            "url" => "https://cdn.simpleicons.org/porsche?viewbox=auto"
            ],
            [
            "title" => "Portainer",
            "slug" => "portainer",
            "url" => "https://cdn.simpleicons.org/portainer?viewbox=auto"
            ],
            [
            "title" => "PortSwigger",
            "slug" => "portswigger",
            "url" => "https://cdn.simpleicons.org/portswigger?viewbox=auto"
            ],
            [
            "title" => "Posit",
            "slug" => "posit",
            "url" => "https://cdn.simpleicons.org/posit?viewbox=auto"
            ],
            [
            "title" => "PostCSS",
            "slug" => "postcss",
            "url" => "https://cdn.simpleicons.org/postcss?viewbox=auto"
            ],
            [
            "title" => "PostgreSQL",
            "slug" => "postgresql",
            "url" => "https://cdn.simpleicons.org/postgresql?viewbox=auto"
            ],
            [
            "title" => "PostHog",
            "slug" => "posthog",
            "url" => "https://cdn.simpleicons.org/posthog?viewbox=auto"
            ],
            [
            "title" => "Postman",
            "slug" => "postman",
            "url" => "https://cdn.simpleicons.org/postman?viewbox=auto"
            ],
            [
            "title" => "Postmates",
            "slug" => "postmates",
            "url" => "https://cdn.simpleicons.org/postmates?viewbox=auto"
            ],
            [
            "title" => "Power Apps",
            "slug" => "powerapps",
            "url" => "https://cdn.simpleicons.org/powerapps?viewbox=auto"
            ],
            [
            "title" => "Power Automate",
            "slug" => "powerautomate",
            "url" => "https://cdn.simpleicons.org/powerautomate?viewbox=auto"
            ],
            [
            "title" => "Power BI",
            "slug" => "powerbi",
            "url" => "https://cdn.simpleicons.org/powerbi?viewbox=auto"
            ],
            [
            "title" => "Power Fx",
            "slug" => "powerfx",
            "url" => "https://cdn.simpleicons.org/powerfx?viewbox=auto"
            ],
            [
            "title" => "Power Pages",
            "slug" => "powerpages",
            "url" => "https://cdn.simpleicons.org/powerpages?viewbox=auto"
            ],
            [
            "title" => "Power Virtual Agents",
            "slug" => "powervirtualagents",
            "url" => "https://cdn.simpleicons.org/powervirtualagents?viewbox=auto"
            ],
            [
            "title" => "POWERS",
            "slug" => "powers",
            "url" => "https://cdn.simpleicons.org/powers?viewbox=auto"
            ],
            [
            "title" => "PowerShell",
            "slug" => "powershell",
            "url" => "https://cdn.simpleicons.org/powershell?viewbox=auto"
            ],
            [
            "title" => "pr.co",
            "slug" => "prdotco",
            "url" => "https://cdn.simpleicons.org/prdotco?viewbox=auto"
            ],
            [
            "title" => "pre-commit",
            "slug" => "precommit",
            "url" => "https://cdn.simpleicons.org/precommit?viewbox=auto"
            ],
            [
            "title" => "Preact",
            "slug" => "preact",
            "url" => "https://cdn.simpleicons.org/preact?viewbox=auto"
            ],
            [
            "title" => "Prefect",
            "slug" => "prefect",
            "url" => "https://cdn.simpleicons.org/prefect?viewbox=auto"
            ],
            [
            "title" => "Premier League",
            "slug" => "premierleague",
            "url" => "https://cdn.simpleicons.org/premierleague?viewbox=auto"
            ],
            [
            "title" => "PrepBytes",
            "slug" => "prepbytes",
            "url" => "https://cdn.simpleicons.org/prepbytes?viewbox=auto"
            ],
            [
            "title" => "PrestaShop",
            "slug" => "prestashop",
            "url" => "https://cdn.simpleicons.org/prestashop?viewbox=auto"
            ],
            [
            "title" => "Presto",
            "slug" => "presto",
            "url" => "https://cdn.simpleicons.org/presto?viewbox=auto"
            ],
            [
            "title" => "Prettier",
            "slug" => "prettier",
            "url" => "https://cdn.simpleicons.org/prettier?viewbox=auto"
            ],
            [
            "title" => "Pretzel",
            "slug" => "pretzel",
            "url" => "https://cdn.simpleicons.org/pretzel?viewbox=auto"
            ],
            [
            "title" => "Prevention",
            "slug" => "prevention",
            "url" => "https://cdn.simpleicons.org/prevention?viewbox=auto"
            ],
            [
            "title" => "Prezi",
            "slug" => "prezi",
            "url" => "https://cdn.simpleicons.org/prezi?viewbox=auto"
            ],
            [
            "title" => "Prime",
            "slug" => "prime",
            "url" => "https://cdn.simpleicons.org/prime?viewbox=auto"
            ],
            [
            "title" => "Prime Video",
            "slug" => "primevideo",
            "url" => "https://cdn.simpleicons.org/primevideo?viewbox=auto"
            ],
            [
            "title" => "Printables",
            "slug" => "printables",
            "url" => "https://cdn.simpleicons.org/printables?viewbox=auto"
            ],
            [
            "title" => "Prisma",
            "slug" => "prisma",
            "url" => "https://cdn.simpleicons.org/prisma?viewbox=auto"
            ],
            [
            "title" => "Prismic",
            "slug" => "prismic",
            "url" => "https://cdn.simpleicons.org/prismic?viewbox=auto"
            ],
            [
            "title" => "Private Division",
            "slug" => "privatedivision",
            "url" => "https://cdn.simpleicons.org/privatedivision?viewbox=auto"
            ],
            [
            "title" => "Private Internet Access",
            "slug" => "privateinternetaccess",
            "url" => "https://cdn.simpleicons.org/privateinternetaccess?viewbox=auto"
            ],
            [
            "title" => "Pro Tools",
            "slug" => "protools",
            "url" => "https://cdn.simpleicons.org/protools?viewbox=auto"
            ],
            [
            "title" => "Probot",
            "slug" => "probot",
            "url" => "https://cdn.simpleicons.org/probot?viewbox=auto"
            ],
            [
            "title" => "Processing Foundation",
            "slug" => "processingfoundation",
            "url" => "https://cdn.simpleicons.org/processingfoundation?viewbox=auto"
            ],
            [
            "title" => "ProcessWire",
            "slug" => "processwire",
            "url" => "https://cdn.simpleicons.org/processwire?viewbox=auto"
            ],
            [
            "title" => "Product Hunt",
            "slug" => "producthunt",
            "url" => "https://cdn.simpleicons.org/producthunt?viewbox=auto"
            ],
            [
            "title" => "Progate",
            "slug" => "progate",
            "url" => "https://cdn.simpleicons.org/progate?viewbox=auto"
            ],
            [
            "title" => "Progress",
            "slug" => "progress",
            "url" => "https://cdn.simpleicons.org/progress?viewbox=auto"
            ],
            [
            "title" => "Prometheus",
            "slug" => "prometheus",
            "url" => "https://cdn.simpleicons.org/prometheus?viewbox=auto"
            ],
            [
            "title" => "Pronouns.page",
            "slug" => "pronounsdotpage",
            "url" => "https://cdn.simpleicons.org/pronounsdotpage?viewbox=auto"
            ],
            [
            "title" => "ProSieben",
            "slug" => "prosieben",
            "url" => "https://cdn.simpleicons.org/prosieben?viewbox=auto"
            ],
            [
            "title" => "Proteus",
            "slug" => "proteus",
            "url" => "https://cdn.simpleicons.org/proteus?viewbox=auto"
            ],
            [
            "title" => "Proto.io",
            "slug" => "protodotio",
            "url" => "https://cdn.simpleicons.org/protodotio?viewbox=auto"
            ],
            [
            "title" => "protocols.io",
            "slug" => "protocolsdotio",
            "url" => "https://cdn.simpleicons.org/protocolsdotio?viewbox=auto"
            ],
            [
            "title" => "Proton",
            "slug" => "proton",
            "url" => "https://cdn.simpleicons.org/proton?viewbox=auto"
            ],
            [
            "title" => "Proton Calendar",
            "slug" => "protoncalendar",
            "url" => "https://cdn.simpleicons.org/protoncalendar?viewbox=auto"
            ],
            [
            "title" => "Proton Drive",
            "slug" => "protondrive",
            "url" => "https://cdn.simpleicons.org/protondrive?viewbox=auto"
            ],
            [
            "title" => "Proton Mail",
            "slug" => "protonmail",
            "url" => "https://cdn.simpleicons.org/protonmail?viewbox=auto"
            ],
            [
            "title" => "Proton VPN",
            "slug" => "protonvpn",
            "url" => "https://cdn.simpleicons.org/protonvpn?viewbox=auto"
            ],
            [
            "title" => "ProtonDB",
            "slug" => "protondb",
            "url" => "https://cdn.simpleicons.org/protondb?viewbox=auto"
            ],
            [
            "title" => "Protractor",
            "slug" => "protractor",
            "url" => "https://cdn.simpleicons.org/protractor?viewbox=auto"
            ],
            [
            "title" => "Proxmox",
            "slug" => "proxmox",
            "url" => "https://cdn.simpleicons.org/proxmox?viewbox=auto"
            ],
            [
            "title" => "Pterodactyl",
            "slug" => "pterodactyl",
            "url" => "https://cdn.simpleicons.org/pterodactyl?viewbox=auto"
            ],
            [
            "title" => "PUBG",
            "slug" => "pubg",
            "url" => "https://cdn.simpleicons.org/pubg?viewbox=auto"
            ],
            [
            "title" => "Publons",
            "slug" => "publons",
            "url" => "https://cdn.simpleicons.org/publons?viewbox=auto"
            ],
            [
            "title" => "PubMed",
            "slug" => "pubmed",
            "url" => "https://cdn.simpleicons.org/pubmed?viewbox=auto"
            ],
            [
            "title" => "Pug",
            "slug" => "pug",
            "url" => "https://cdn.simpleicons.org/pug?viewbox=auto"
            ],
            [
            "title" => "Pulumi",
            "slug" => "pulumi",
            "url" => "https://cdn.simpleicons.org/pulumi?viewbox=auto"
            ],
            [
            "title" => "Puma",
            "slug" => "puma",
            "url" => "https://cdn.simpleicons.org/puma?viewbox=auto"
            ],
            [
            "title" => "Puppet",
            "slug" => "puppet",
            "url" => "https://cdn.simpleicons.org/puppet?viewbox=auto"
            ],
            [
            "title" => "Puppeteer",
            "slug" => "puppeteer",
            "url" => "https://cdn.simpleicons.org/puppeteer?viewbox=auto"
            ],
            [
            "title" => "PureScript",
            "slug" => "purescript",
            "url" => "https://cdn.simpleicons.org/purescript?viewbox=auto"
            ],
            [
            "title" => "PurgeCSS",
            "slug" => "purgecss",
            "url" => "https://cdn.simpleicons.org/purgecss?viewbox=auto"
            ],
            [
            "title" => "Purism",
            "slug" => "purism",
            "url" => "https://cdn.simpleicons.org/purism?viewbox=auto"
            ],
            [
            "title" => "Pushbullet",
            "slug" => "pushbullet",
            "url" => "https://cdn.simpleicons.org/pushbullet?viewbox=auto"
            ],
            [
            "title" => "Pusher",
            "slug" => "pusher",
            "url" => "https://cdn.simpleicons.org/pusher?viewbox=auto"
            ],
            [
            "title" => "PWA",
            "slug" => "pwa",
            "url" => "https://cdn.simpleicons.org/pwa?viewbox=auto"
            ],
            [
            "title" => "PyCharm",
            "slug" => "pycharm",
            "url" => "https://cdn.simpleicons.org/pycharm?viewbox=auto"
            ],
            [
            "title" => "PyCQA",
            "slug" => "pycqa",
            "url" => "https://cdn.simpleicons.org/pycqa?viewbox=auto"
            ],
            [
            "title" => "Pydantic",
            "slug" => "pydantic",
            "url" => "https://cdn.simpleicons.org/pydantic?viewbox=auto"
            ],
            [
            "title" => "PyG",
            "slug" => "pyg",
            "url" => "https://cdn.simpleicons.org/pyg?viewbox=auto"
            ],
            [
            "title" => "PyPI",
            "slug" => "pypi",
            "url" => "https://cdn.simpleicons.org/pypi?viewbox=auto"
            ],
            [
            "title" => "PyPy",
            "slug" => "pypy",
            "url" => "https://cdn.simpleicons.org/pypy?viewbox=auto"
            ],
            [
            "title" => "PyScaffold",
            "slug" => "pyscaffold",
            "url" => "https://cdn.simpleicons.org/pyscaffold?viewbox=auto"
            ],
            [
            "title" => "PySyft",
            "slug" => "pysyft",
            "url" => "https://cdn.simpleicons.org/pysyft?viewbox=auto"
            ],
            [
            "title" => "Pytest",
            "slug" => "pytest",
            "url" => "https://cdn.simpleicons.org/pytest?viewbox=auto"
            ],
            [
            "title" => "Python",
            "slug" => "python",
            "url" => "https://cdn.simpleicons.org/python?viewbox=auto"
            ],
            [
            "title" => "PythonAnywhere",
            "slug" => "pythonanywhere",
            "url" => "https://cdn.simpleicons.org/pythonanywhere?viewbox=auto"
            ],
            [
            "title" => "PyTorch",
            "slug" => "pytorch",
            "url" => "https://cdn.simpleicons.org/pytorch?viewbox=auto"
            ],
            [
            "title" => "PyUp",
            "slug" => "pyup",
            "url" => "https://cdn.simpleicons.org/pyup?viewbox=auto"
            ],
            [
            "title" => "Qantas",
            "slug" => "qantas",
            "url" => "https://cdn.simpleicons.org/qantas?viewbox=auto"
            ],
            [
            "title" => "Qase",
            "slug" => "qase",
            "url" => "https://cdn.simpleicons.org/qase?viewbox=auto"
            ],
            [
            "title" => "Qatar Airways",
            "slug" => "qatarairways",
            "url" => "https://cdn.simpleicons.org/qatarairways?viewbox=auto"
            ],
            [
            "title" => "qbittorrent",
            "slug" => "qbittorrent",
            "url" => "https://cdn.simpleicons.org/qbittorrent?viewbox=auto"
            ],
            [
            "title" => "QEMU",
            "slug" => "qemu",
            "url" => "https://cdn.simpleicons.org/qemu?viewbox=auto"
            ],
            [
            "title" => "Qgis",
            "slug" => "qgis",
            "url" => "https://cdn.simpleicons.org/qgis?viewbox=auto"
            ],
            [
            "title" => "Qi",
            "slug" => "qi",
            "url" => "https://cdn.simpleicons.org/qi?viewbox=auto"
            ],
            [
            "title" => "Qiita",
            "slug" => "qiita",
            "url" => "https://cdn.simpleicons.org/qiita?viewbox=auto"
            ],
            [
            "title" => "Qiskit",
            "slug" => "qiskit",
            "url" => "https://cdn.simpleicons.org/qiskit?viewbox=auto"
            ],
            [
            "title" => "QIWI",
            "slug" => "qiwi",
            "url" => "https://cdn.simpleicons.org/qiwi?viewbox=auto"
            ],
            [
            "title" => "Qlik",
            "slug" => "qlik",
            "url" => "https://cdn.simpleicons.org/qlik?viewbox=auto"
            ],
            [
            "title" => "QMK",
            "slug" => "qmk",
            "url" => "https://cdn.simpleicons.org/qmk?viewbox=auto"
            ],
            [
            "title" => "QNAP",
            "slug" => "qnap",
            "url" => "https://cdn.simpleicons.org/qnap?viewbox=auto"
            ],
            [
            "title" => "Qt",
            "slug" => "qt",
            "url" => "https://cdn.simpleicons.org/qt?viewbox=auto"
            ],
            [
            "title" => "Qualcomm",
            "slug" => "qualcomm",
            "url" => "https://cdn.simpleicons.org/qualcomm?viewbox=auto"
            ],
            [
            "title" => "Qualtrics",
            "slug" => "qualtrics",
            "url" => "https://cdn.simpleicons.org/qualtrics?viewbox=auto"
            ],
            [
            "title" => "Qualys",
            "slug" => "qualys",
            "url" => "https://cdn.simpleicons.org/qualys?viewbox=auto"
            ],
            [
            "title" => "Quantcast",
            "slug" => "quantcast",
            "url" => "https://cdn.simpleicons.org/quantcast?viewbox=auto"
            ],
            [
            "title" => "QuantConnect",
            "slug" => "quantconnect",
            "url" => "https://cdn.simpleicons.org/quantconnect?viewbox=auto"
            ],
            [
            "title" => "Quarkus",
            "slug" => "quarkus",
            "url" => "https://cdn.simpleicons.org/quarkus?viewbox=auto"
            ],
            [
            "title" => "Quarto",
            "slug" => "quarto",
            "url" => "https://cdn.simpleicons.org/quarto?viewbox=auto"
            ],
            [
            "title" => "Quasar",
            "slug" => "quasar",
            "url" => "https://cdn.simpleicons.org/quasar?viewbox=auto"
            ],
            [
            "title" => "Qubes OS",
            "slug" => "qubesos",
            "url" => "https://cdn.simpleicons.org/qubesos?viewbox=auto"
            ],
            [
            "title" => "Quest",
            "slug" => "quest",
            "url" => "https://cdn.simpleicons.org/quest?viewbox=auto"
            ],
            [
            "title" => "QuickBooks",
            "slug" => "quickbooks",
            "url" => "https://cdn.simpleicons.org/quickbooks?viewbox=auto"
            ],
            [
            "title" => "QuickLook",
            "slug" => "quicklook",
            "url" => "https://cdn.simpleicons.org/quicklook?viewbox=auto"
            ],
            [
            "title" => "QuickTime",
            "slug" => "quicktime",
            "url" => "https://cdn.simpleicons.org/quicktime?viewbox=auto"
            ],
            [
            "title" => "quicktype",
            "slug" => "quicktype",
            "url" => "https://cdn.simpleicons.org/quicktype?viewbox=auto"
            ],
            [
            "title" => "Quip",
            "slug" => "quip",
            "url" => "https://cdn.simpleicons.org/quip?viewbox=auto"
            ],
            [
            "title" => "Quizlet",
            "slug" => "quizlet",
            "url" => "https://cdn.simpleicons.org/quizlet?viewbox=auto"
            ],
            [
            "title" => "Quora",
            "slug" => "quora",
            "url" => "https://cdn.simpleicons.org/quora?viewbox=auto"
            ],
            [
            "title" => "Qwant",
            "slug" => "qwant",
            "url" => "https://cdn.simpleicons.org/qwant?viewbox=auto"
            ],
            [
            "title" => "Qwik",
            "slug" => "qwik",
            "url" => "https://cdn.simpleicons.org/qwik?viewbox=auto"
            ],
            [
            "title" => "Qwiklabs",
            "slug" => "qwiklabs",
            "url" => "https://cdn.simpleicons.org/qwiklabs?viewbox=auto"
            ],
            [
            "title" => "Qzone",
            "slug" => "qzone",
            "url" => "https://cdn.simpleicons.org/qzone?viewbox=auto"
            ],
            [
            "title" => "R",
            "slug" => "r",
            "url" => "https://cdn.simpleicons.org/r?viewbox=auto"
            ],
            [
            "title" => "R3",
            "slug" => "r3",
            "url" => "https://cdn.simpleicons.org/r3?viewbox=auto"
            ],
            [
            "title" => "RabbitMQ",
            "slug" => "rabbitmq",
            "url" => "https://cdn.simpleicons.org/rabbitmq?viewbox=auto"
            ],
            [
            "title" => "Racket",
            "slug" => "racket",
            "url" => "https://cdn.simpleicons.org/racket?viewbox=auto"
            ],
            [
            "title" => "RAD Studio",
            "slug" => "radstudio",
            "url" => "https://cdn.simpleicons.org/radstudio?viewbox=auto"
            ],
            [
            "title" => "Radar",
            "slug" => "radar",
            "url" => "https://cdn.simpleicons.org/radar?viewbox=auto"
            ],
            [
            "title" => "radarr",
            "slug" => "radarr",
            "url" => "https://cdn.simpleicons.org/radarr?viewbox=auto"
            ],
            [
            "title" => "RadioPublic",
            "slug" => "radiopublic",
            "url" => "https://cdn.simpleicons.org/radiopublic?viewbox=auto"
            ],
            [
            "title" => "Radix UI",
            "slug" => "radixui",
            "url" => "https://cdn.simpleicons.org/radixui?viewbox=auto"
            ],
            [
            "title" => "Railway",
            "slug" => "railway",
            "url" => "https://cdn.simpleicons.org/railway?viewbox=auto"
            ],
            [
            "title" => "Rainmeter",
            "slug" => "rainmeter",
            "url" => "https://cdn.simpleicons.org/rainmeter?viewbox=auto"
            ],
            [
            "title" => "Rakuten",
            "slug" => "rakuten",
            "url" => "https://cdn.simpleicons.org/rakuten?viewbox=auto"
            ],
            [
            "title" => "Ram",
            "slug" => "ram",
            "url" => "https://cdn.simpleicons.org/ram?viewbox=auto"
            ],
            [
            "title" => "Rancher",
            "slug" => "rancher",
            "url" => "https://cdn.simpleicons.org/rancher?viewbox=auto"
            ],
            [
            "title" => "Rapid",
            "slug" => "rapid",
            "url" => "https://cdn.simpleicons.org/rapid?viewbox=auto"
            ],
            [
            "title" => "Rarible",
            "slug" => "rarible",
            "url" => "https://cdn.simpleicons.org/rarible?viewbox=auto"
            ],
            [
            "title" => "Rasa",
            "slug" => "rasa",
            "url" => "https://cdn.simpleicons.org/rasa?viewbox=auto"
            ],
            [
            "title" => "Raspberry Pi",
            "slug" => "raspberrypi",
            "url" => "https://cdn.simpleicons.org/raspberrypi?viewbox=auto"
            ],
            [
            "title" => "Ravelry",
            "slug" => "ravelry",
            "url" => "https://cdn.simpleicons.org/ravelry?viewbox=auto"
            ],
            [
            "title" => "Ray",
            "slug" => "ray",
            "url" => "https://cdn.simpleicons.org/ray?viewbox=auto"
            ],
            [
            "title" => "Raycast",
            "slug" => "raycast",
            "url" => "https://cdn.simpleicons.org/raycast?viewbox=auto"
            ],
            [
            "title" => "Raylib",
            "slug" => "raylib",
            "url" => "https://cdn.simpleicons.org/raylib?viewbox=auto"
            ],
            [
            "title" => "Razer",
            "slug" => "razer",
            "url" => "https://cdn.simpleicons.org/razer?viewbox=auto"
            ],
            [
            "title" => "Razorpay",
            "slug" => "razorpay",
            "url" => "https://cdn.simpleicons.org/razorpay?viewbox=auto"
            ],
            [
            "title" => "Rclone",
            "slug" => "rclone",
            "url" => "https://cdn.simpleicons.org/rclone?viewbox=auto"
            ],
            [
            "title" => "React",
            "slug" => "react",
            "url" => "https://cdn.simpleicons.org/react?viewbox=auto"
            ],
            [
            "title" => "React Bootstrap",
            "slug" => "reactbootstrap",
            "url" => "https://cdn.simpleicons.org/reactbootstrap?viewbox=auto"
            ],
            [
            "title" => "React Hook Form",
            "slug" => "reacthookform",
            "url" => "https://cdn.simpleicons.org/reacthookform?viewbox=auto"
            ],
            [
            "title" => "React Query",
            "slug" => "reactquery",
            "url" => "https://cdn.simpleicons.org/reactquery?viewbox=auto"
            ],
            [
            "title" => "React Router",
            "slug" => "reactrouter",
            "url" => "https://cdn.simpleicons.org/reactrouter?viewbox=auto"
            ],
            [
            "title" => "React Table",
            "slug" => "reacttable",
            "url" => "https://cdn.simpleicons.org/reacttable?viewbox=auto"
            ],
            [
            "title" => "Reactive Resume",
            "slug" => "reactiveresume",
            "url" => "https://cdn.simpleicons.org/reactiveresume?viewbox=auto"
            ],
            [
            "title" => "ReactiveX",
            "slug" => "reactivex",
            "url" => "https://cdn.simpleicons.org/reactivex?viewbox=auto"
            ],
            [
            "title" => "ReactOS",
            "slug" => "reactos",
            "url" => "https://cdn.simpleicons.org/reactos?viewbox=auto"
            ],
            [
            "title" => "Read the Docs",
            "slug" => "readthedocs",
            "url" => "https://cdn.simpleicons.org/readthedocs?viewbox=auto"
            ],
            [
            "title" => "Read.cv",
            "slug" => "readdotcv",
            "url" => "https://cdn.simpleicons.org/readdotcv?viewbox=auto"
            ],
            [
            "title" => "ReadMe",
            "slug" => "readme",
            "url" => "https://cdn.simpleicons.org/readme?viewbox=auto"
            ],
            [
            "title" => "Realm",
            "slug" => "realm",
            "url" => "https://cdn.simpleicons.org/realm?viewbox=auto"
            ],
            [
            "title" => "Reason",
            "slug" => "reason",
            "url" => "https://cdn.simpleicons.org/reason?viewbox=auto"
            ],
            [
            "title" => "Reason Studios",
            "slug" => "reasonstudios",
            "url" => "https://cdn.simpleicons.org/reasonstudios?viewbox=auto"
            ],
            [
            "title" => "Recoil",
            "slug" => "recoil",
            "url" => "https://cdn.simpleicons.org/recoil?viewbox=auto"
            ],
            [
            "title" => "Red",
            "slug" => "red",
            "url" => "https://cdn.simpleicons.org/red?viewbox=auto"
            ],
            [
            "title" => "Red Bull",
            "slug" => "redbull",
            "url" => "https://cdn.simpleicons.org/redbull?viewbox=auto"
            ],
            [
            "title" => "Red Hat",
            "slug" => "redhat",
            "url" => "https://cdn.simpleicons.org/redhat?viewbox=auto"
            ],
            [
            "title" => "Red Hat Open Shift",
            "slug" => "redhatopenshift",
            "url" => "https://cdn.simpleicons.org/redhatopenshift?viewbox=auto"
            ],
            [
            "title" => "Redash",
            "slug" => "redash",
            "url" => "https://cdn.simpleicons.org/redash?viewbox=auto"
            ],
            [
            "title" => "Redbubble",
            "slug" => "redbubble",
            "url" => "https://cdn.simpleicons.org/redbubble?viewbox=auto"
            ],
            [
            "title" => "Reddit",
            "slug" => "reddit",
            "url" => "https://cdn.simpleicons.org/reddit?viewbox=auto"
            ],
            [
            "title" => "Redis",
            "slug" => "redis",
            "url" => "https://cdn.simpleicons.org/redis?viewbox=auto"
            ],
            [
            "title" => "Redmine",
            "slug" => "redmine",
            "url" => "https://cdn.simpleicons.org/redmine?viewbox=auto"
            ],
            [
            "title" => "Redox",
            "slug" => "redox",
            "url" => "https://cdn.simpleicons.org/redox?viewbox=auto"
            ],
            [
            "title" => "Redux",
            "slug" => "redux",
            "url" => "https://cdn.simpleicons.org/redux?viewbox=auto"
            ],
            [
            "title" => "Redux-Saga",
            "slug" => "reduxsaga",
            "url" => "https://cdn.simpleicons.org/reduxsaga?viewbox=auto"
            ],
            [
            "title" => "RedwoodJS",
            "slug" => "redwoodjs",
            "url" => "https://cdn.simpleicons.org/redwoodjs?viewbox=auto"
            ],
            [
            "title" => "Reebok",
            "slug" => "reebok",
            "url" => "https://cdn.simpleicons.org/reebok?viewbox=auto"
            ],
            [
            "title" => "Refine",
            "slug" => "refine",
            "url" => "https://cdn.simpleicons.org/refine?viewbox=auto"
            ],
            [
            "title" => "Relay",
            "slug" => "relay",
            "url" => "https://cdn.simpleicons.org/relay?viewbox=auto"
            ],
            [
            "title" => "Reliance Industries Limited",
            "slug" => "relianceindustrieslimited",
            "url" => "https://cdn.simpleicons.org/relianceindustrieslimited?viewbox=auto"
            ],
            [
            "title" => "remark",
            "slug" => "remark",
            "url" => "https://cdn.simpleicons.org/remark?viewbox=auto"
            ],
            [
            "title" => "Remedy Entertainment",
            "slug" => "remedyentertainment",
            "url" => "https://cdn.simpleicons.org/remedyentertainment?viewbox=auto"
            ],
            [
            "title" => "Remix",
            "slug" => "remix",
            "url" => "https://cdn.simpleicons.org/remix?viewbox=auto"
            ],
            [
            "title" => "Ren'Py",
            "slug" => "renpy",
            "url" => "https://cdn.simpleicons.org/renpy?viewbox=auto"
            ],
            [
            "title" => "Renault",
            "slug" => "renault",
            "url" => "https://cdn.simpleicons.org/renault?viewbox=auto"
            ],
            [
            "title" => "Render",
            "slug" => "render",
            "url" => "https://cdn.simpleicons.org/render?viewbox=auto"
            ],
            [
            "title" => "RenovateBot",
            "slug" => "renovatebot",
            "url" => "https://cdn.simpleicons.org/renovatebot?viewbox=auto"
            ],
            [
            "title" => "Renren",
            "slug" => "renren",
            "url" => "https://cdn.simpleicons.org/renren?viewbox=auto"
            ],
            [
            "title" => "Replit",
            "slug" => "replit",
            "url" => "https://cdn.simpleicons.org/replit?viewbox=auto"
            ],
            [
            "title" => "Republic of Gamers",
            "slug" => "republicofgamers",
            "url" => "https://cdn.simpleicons.org/republicofgamers?viewbox=auto"
            ],
            [
            "title" => "ReScript",
            "slug" => "rescript",
            "url" => "https://cdn.simpleicons.org/rescript?viewbox=auto"
            ],
            [
            "title" => "RescueTime",
            "slug" => "rescuetime",
            "url" => "https://cdn.simpleicons.org/rescuetime?viewbox=auto"
            ],
            [
            "title" => "ResearchGate",
            "slug" => "researchgate",
            "url" => "https://cdn.simpleicons.org/researchgate?viewbox=auto"
            ],
            [
            "title" => "Resend",
            "slug" => "resend",
            "url" => "https://cdn.simpleicons.org/resend?viewbox=auto"
            ],
            [
            "title" => "ReSharper",
            "slug" => "resharper",
            "url" => "https://cdn.simpleicons.org/resharper?viewbox=auto"
            ],
            [
            "title" => "Resurrection Remix OS",
            "slug" => "resurrectionremixos",
            "url" => "https://cdn.simpleicons.org/resurrectionremixos?viewbox=auto"
            ],
            [
            "title" => "Retool",
            "slug" => "retool",
            "url" => "https://cdn.simpleicons.org/retool?viewbox=auto"
            ],
            [
            "title" => "RetroArch",
            "slug" => "retroarch",
            "url" => "https://cdn.simpleicons.org/retroarch?viewbox=auto"
            ],
            [
            "title" => "RetroPie",
            "slug" => "retropie",
            "url" => "https://cdn.simpleicons.org/retropie?viewbox=auto"
            ],
            [
            "title" => "ReVanced",
            "slug" => "revanced",
            "url" => "https://cdn.simpleicons.org/revanced?viewbox=auto"
            ],
            [
            "title" => "reveal.js",
            "slug" => "revealdotjs",
            "url" => "https://cdn.simpleicons.org/revealdotjs?viewbox=auto"
            ],
            [
            "title" => "ReverbNation",
            "slug" => "reverbnation",
            "url" => "https://cdn.simpleicons.org/reverbnation?viewbox=auto"
            ],
            [
            "title" => "Revolt.chat",
            "slug" => "revoltdotchat",
            "url" => "https://cdn.simpleicons.org/revoltdotchat?viewbox=auto"
            ],
            [
            "title" => "Revolut",
            "slug" => "revolut",
            "url" => "https://cdn.simpleicons.org/revolut?viewbox=auto"
            ],
            [
            "title" => "Revue",
            "slug" => "revue",
            "url" => "https://cdn.simpleicons.org/revue?viewbox=auto"
            ],
            [
            "title" => "REWE",
            "slug" => "rewe",
            "url" => "https://cdn.simpleicons.org/rewe?viewbox=auto"
            ],
            [
            "title" => "Rezgo",
            "slug" => "rezgo",
            "url" => "https://cdn.simpleicons.org/rezgo?viewbox=auto"
            ],
            [
            "title" => "Rhinoceros",
            "slug" => "rhinoceros",
            "url" => "https://cdn.simpleicons.org/rhinoceros?viewbox=auto"
            ],
            [
            "title" => "Rich",
            "slug" => "rich",
            "url" => "https://cdn.simpleicons.org/rich?viewbox=auto"
            ],
            [
            "title" => "Rider",
            "slug" => "rider",
            "url" => "https://cdn.simpleicons.org/rider?viewbox=auto"
            ],
            [
            "title" => "Rimac Automobili",
            "slug" => "rimacautomobili",
            "url" => "https://cdn.simpleicons.org/rimacautomobili?viewbox=auto"
            ],
            [
            "title" => "Ring",
            "slug" => "ring",
            "url" => "https://cdn.simpleicons.org/ring?viewbox=auto"
            ],
            [
            "title" => "Riot Games",
            "slug" => "riotgames",
            "url" => "https://cdn.simpleicons.org/riotgames?viewbox=auto"
            ],
            [
            "title" => "Ripple",
            "slug" => "ripple",
            "url" => "https://cdn.simpleicons.org/ripple?viewbox=auto"
            ],
            [
            "title" => "RISC-V",
            "slug" => "riscv",
            "url" => "https://cdn.simpleicons.org/riscv?viewbox=auto"
            ],
            [
            "title" => "Riseup",
            "slug" => "riseup",
            "url" => "https://cdn.simpleicons.org/riseup?viewbox=auto"
            ],
            [
            "title" => "Ritz Carlton",
            "slug" => "ritzcarlton",
            "url" => "https://cdn.simpleicons.org/ritzcarlton?viewbox=auto"
            ],
            [
            "title" => "Rive",
            "slug" => "rive",
            "url" => "https://cdn.simpleicons.org/rive?viewbox=auto"
            ],
            [
            "title" => "roadmap.sh",
            "slug" => "roadmapdotsh",
            "url" => "https://cdn.simpleicons.org/roadmapdotsh?viewbox=auto"
            ],
            [
            "title" => "Roam Research",
            "slug" => "roamresearch",
            "url" => "https://cdn.simpleicons.org/roamresearch?viewbox=auto"
            ],
            [
            "title" => "Robinhood",
            "slug" => "robinhood",
            "url" => "https://cdn.simpleicons.org/robinhood?viewbox=auto"
            ],
            [
            "title" => "Roblox",
            "slug" => "roblox",
            "url" => "https://cdn.simpleicons.org/roblox?viewbox=auto"
            ],
            [
            "title" => "Roblox Studio",
            "slug" => "robloxstudio",
            "url" => "https://cdn.simpleicons.org/robloxstudio?viewbox=auto"
            ],
            [
            "title" => "Robot Framework",
            "slug" => "robotframework",
            "url" => "https://cdn.simpleicons.org/robotframework?viewbox=auto"
            ],
            [
            "title" => "Rocket",
            "slug" => "rocket",
            "url" => "https://cdn.simpleicons.org/rocket?viewbox=auto"
            ],
            [
            "title" => "Rocket.Chat",
            "slug" => "rocketdotchat",
            "url" => "https://cdn.simpleicons.org/rocketdotchat?viewbox=auto"
            ],
            [
            "title" => "RocksDB",
            "slug" => "rocksdb",
            "url" => "https://cdn.simpleicons.org/rocksdb?viewbox=auto"
            ],
            [
            "title" => "Rockstar Games",
            "slug" => "rockstargames",
            "url" => "https://cdn.simpleicons.org/rockstargames?viewbox=auto"
            ],
            [
            "title" => "Rockwell Automation",
            "slug" => "rockwellautomation",
            "url" => "https://cdn.simpleicons.org/rockwellautomation?viewbox=auto"
            ],
            [
            "title" => "Rocky Linux",
            "slug" => "rockylinux",
            "url" => "https://cdn.simpleicons.org/rockylinux?viewbox=auto"
            ],
            [
            "title" => "Roku",
            "slug" => "roku",
            "url" => "https://cdn.simpleicons.org/roku?viewbox=auto"
            ],
            [
            "title" => "Roll20",
            "slug" => "roll20",
            "url" => "https://cdn.simpleicons.org/roll20?viewbox=auto"
            ],
            [
            "title" => "Rolls-Royce",
            "slug" => "rollsroyce",
            "url" => "https://cdn.simpleicons.org/rollsroyce?viewbox=auto"
            ],
            [
            "title" => "rollup.js",
            "slug" => "rollupdotjs",
            "url" => "https://cdn.simpleicons.org/rollupdotjs?viewbox=auto"
            ],
            [
            "title" => "Roon",
            "slug" => "roon",
            "url" => "https://cdn.simpleicons.org/roon?viewbox=auto"
            ],
            [
            "title" => "Root Me",
            "slug" => "rootme",
            "url" => "https://cdn.simpleicons.org/rootme?viewbox=auto"
            ],
            [
            "title" => "Roots",
            "slug" => "roots",
            "url" => "https://cdn.simpleicons.org/roots?viewbox=auto"
            ],
            [
            "title" => "Roots Bedrock",
            "slug" => "rootsbedrock",
            "url" => "https://cdn.simpleicons.org/rootsbedrock?viewbox=auto"
            ],
            [
            "title" => "Roots Sage",
            "slug" => "rootssage",
            "url" => "https://cdn.simpleicons.org/rootssage?viewbox=auto"
            ],
            [
            "title" => "ROS",
            "slug" => "ros",
            "url" => "https://cdn.simpleicons.org/ros?viewbox=auto"
            ],
            [
            "title" => "Rossmann",
            "slug" => "rossmann",
            "url" => "https://cdn.simpleicons.org/rossmann?viewbox=auto"
            ],
            [
            "title" => "Rotary International",
            "slug" => "rotaryinternational",
            "url" => "https://cdn.simpleicons.org/rotaryinternational?viewbox=auto"
            ],
            [
            "title" => "Rotten Tomatoes",
            "slug" => "rottentomatoes",
            "url" => "https://cdn.simpleicons.org/rottentomatoes?viewbox=auto"
            ],
            [
            "title" => "Roundcube",
            "slug" => "roundcube",
            "url" => "https://cdn.simpleicons.org/roundcube?viewbox=auto"
            ],
            [
            "title" => "RSocket",
            "slug" => "rsocket",
            "url" => "https://cdn.simpleicons.org/rsocket?viewbox=auto"
            ],
            [
            "title" => "RSS",
            "slug" => "rss",
            "url" => "https://cdn.simpleicons.org/rss?viewbox=auto"
            ],
            [
            "title" => "RStudio IDE",
            "slug" => "rstudioide",
            "url" => "https://cdn.simpleicons.org/rstudioide?viewbox=auto"
            ],
            [
            "title" => "RTÉ",
            "slug" => "rte",
            "url" => "https://cdn.simpleicons.org/rte?viewbox=auto"
            ],
            [
            "title" => "RTL",
            "slug" => "rtl",
            "url" => "https://cdn.simpleicons.org/rtl?viewbox=auto"
            ],
            [
            "title" => "RTLZWEI",
            "slug" => "rtlzwei",
            "url" => "https://cdn.simpleicons.org/rtlzwei?viewbox=auto"
            ],
            [
            "title" => "RTM",
            "slug" => "rtm",
            "url" => "https://cdn.simpleicons.org/rtm?viewbox=auto"
            ],
            [
            "title" => "RuboCop",
            "slug" => "rubocop",
            "url" => "https://cdn.simpleicons.org/rubocop?viewbox=auto"
            ],
            [
            "title" => "Ruby",
            "slug" => "ruby",
            "url" => "https://cdn.simpleicons.org/ruby?viewbox=auto"
            ],
            [
            "title" => "Ruby on Rails",
            "slug" => "rubyonrails",
            "url" => "https://cdn.simpleicons.org/rubyonrails?viewbox=auto"
            ],
            [
            "title" => "Ruby Sinatra",
            "slug" => "rubysinatra",
            "url" => "https://cdn.simpleicons.org/rubysinatra?viewbox=auto"
            ],
            [
            "title" => "RubyGems",
            "slug" => "rubygems",
            "url" => "https://cdn.simpleicons.org/rubygems?viewbox=auto"
            ],
            [
            "title" => "RubyMine",
            "slug" => "rubymine",
            "url" => "https://cdn.simpleicons.org/rubymine?viewbox=auto"
            ],
            [
            "title" => "Ruff",
            "slug" => "ruff",
            "url" => "https://cdn.simpleicons.org/ruff?viewbox=auto"
            ],
            [
            "title" => "Rumahweb",
            "slug" => "rumahweb",
            "url" => "https://cdn.simpleicons.org/rumahweb?viewbox=auto"
            ],
            [
            "title" => "Rumble",
            "slug" => "rumble",
            "url" => "https://cdn.simpleicons.org/rumble?viewbox=auto"
            ],
            [
            "title" => "Rundeck",
            "slug" => "rundeck",
            "url" => "https://cdn.simpleicons.org/rundeck?viewbox=auto"
            ],
            [
            "title" => "Runkeeper",
            "slug" => "runkeeper",
            "url" => "https://cdn.simpleicons.org/runkeeper?viewbox=auto"
            ],
            [
            "title" => "RunKit",
            "slug" => "runkit",
            "url" => "https://cdn.simpleicons.org/runkit?viewbox=auto"
            ],
            [
            "title" => "Runrun.it",
            "slug" => "runrundotit",
            "url" => "https://cdn.simpleicons.org/runrundotit?viewbox=auto"
            ],
            [
            "title" => "Rust",
            "slug" => "rust",
            "url" => "https://cdn.simpleicons.org/rust?viewbox=auto"
            ],
            [
            "title" => "RustDesk",
            "slug" => "rustdesk",
            "url" => "https://cdn.simpleicons.org/rustdesk?viewbox=auto"
            ],
            [
            "title" => "RxDB",
            "slug" => "rxdb",
            "url" => "https://cdn.simpleicons.org/rxdb?viewbox=auto"
            ],
            [
            "title" => "Ryanair",
            "slug" => "ryanair",
            "url" => "https://cdn.simpleicons.org/ryanair?viewbox=auto"
            ],
            [
            "title" => "Rye",
            "slug" => "rye",
            "url" => "https://cdn.simpleicons.org/rye?viewbox=auto"
            ],
            [
            "title" => "S7 Airlines",
            "slug" => "s7airlines",
            "url" => "https://cdn.simpleicons.org/s7airlines?viewbox=auto"
            ],
            [
            "title" => "Sabanci",
            "slug" => "sabanci",
            "url" => "https://cdn.simpleicons.org/sabanci?viewbox=auto"
            ],
            [
            "title" => "Safari",
            "slug" => "safari",
            "url" => "https://cdn.simpleicons.org/safari?viewbox=auto"
            ],
            [
            "title" => "Sage",
            "slug" => "sage",
            "url" => "https://cdn.simpleicons.org/sage?viewbox=auto"
            ],
            [
            "title" => "Sahibinden",
            "slug" => "sahibinden",
            "url" => "https://cdn.simpleicons.org/sahibinden?viewbox=auto"
            ],
            [
            "title" => "Sailfish OS",
            "slug" => "sailfishos",
            "url" => "https://cdn.simpleicons.org/sailfishos?viewbox=auto"
            ],
            [
            "title" => "Sails.js",
            "slug" => "sailsdotjs",
            "url" => "https://cdn.simpleicons.org/sailsdotjs?viewbox=auto"
            ],
            [
            "title" => "Salesforce",
            "slug" => "salesforce",
            "url" => "https://cdn.simpleicons.org/salesforce?viewbox=auto"
            ],
            [
            "title" => "Salla",
            "slug" => "salla",
            "url" => "https://cdn.simpleicons.org/salla?viewbox=auto"
            ],
            [
            "title" => "Salt Project",
            "slug" => "saltproject",
            "url" => "https://cdn.simpleicons.org/saltproject?viewbox=auto"
            ],
            [
            "title" => "Sam's Club",
            "slug" => "samsclub",
            "url" => "https://cdn.simpleicons.org/samsclub?viewbox=auto"
            ],
            [
            "title" => "Samsung",
            "slug" => "samsung",
            "url" => "https://cdn.simpleicons.org/samsung?viewbox=auto"
            ],
            [
            "title" => "Samsung Pay",
            "slug" => "samsungpay",
            "url" => "https://cdn.simpleicons.org/samsungpay?viewbox=auto"
            ],
            [
            "title" => "San Francisco Municipal Railway",
            "slug" => "sanfranciscomunicipalrailway",
            "url" => "https://cdn.simpleicons.org/sanfranciscomunicipalrailway?viewbox=auto"
            ],
            [
            "title" => "SanDisk",
            "slug" => "sandisk",
            "url" => "https://cdn.simpleicons.org/sandisk?viewbox=auto"
            ],
            [
            "title" => "Sanic",
            "slug" => "sanic",
            "url" => "https://cdn.simpleicons.org/sanic?viewbox=auto"
            ],
            [
            "title" => "Sanity",
            "slug" => "sanity",
            "url" => "https://cdn.simpleicons.org/sanity?viewbox=auto"
            ],
            [
            "title" => "São Paulo Metro",
            "slug" => "saopaulometro",
            "url" => "https://cdn.simpleicons.org/saopaulometro?viewbox=auto"
            ],
            [
            "title" => "SAP",
            "slug" => "sap",
            "url" => "https://cdn.simpleicons.org/sap?viewbox=auto"
            ],
            [
            "title" => "Sartorius",
            "slug" => "sartorius",
            "url" => "https://cdn.simpleicons.org/sartorius?viewbox=auto"
            ],
            [
            "title" => "Sass",
            "slug" => "sass",
            "url" => "https://cdn.simpleicons.org/sass?viewbox=auto"
            ],
            [
            "title" => "Sat.1",
            "slug" => "satdot1",
            "url" => "https://cdn.simpleicons.org/satdot1?viewbox=auto"
            ],
            [
            "title" => "Satellite",
            "slug" => "satellite",
            "url" => "https://cdn.simpleicons.org/satellite?viewbox=auto"
            ],
            [
            "title" => "Saturn",
            "slug" => "saturn",
            "url" => "https://cdn.simpleicons.org/saturn?viewbox=auto"
            ],
            [
            "title" => "Sauce Labs",
            "slug" => "saucelabs",
            "url" => "https://cdn.simpleicons.org/saucelabs?viewbox=auto"
            ],
            [
            "title" => "Saudia",
            "slug" => "saudia",
            "url" => "https://cdn.simpleicons.org/saudia?viewbox=auto"
            ],
            [
            "title" => "Scala",
            "slug" => "scala",
            "url" => "https://cdn.simpleicons.org/scala?viewbox=auto"
            ],
            [
            "title" => "Scaleway",
            "slug" => "scaleway",
            "url" => "https://cdn.simpleicons.org/scaleway?viewbox=auto"
            ],
            [
            "title" => "Scania",
            "slug" => "scania",
            "url" => "https://cdn.simpleicons.org/scania?viewbox=auto"
            ],
            [
            "title" => "Schneider Electric",
            "slug" => "schneiderelectric",
            "url" => "https://cdn.simpleicons.org/schneiderelectric?viewbox=auto"
            ],
            [
            "title" => "scikit-learn",
            "slug" => "scikitlearn",
            "url" => "https://cdn.simpleicons.org/scikitlearn?viewbox=auto"
            ],
            [
            "title" => "Scilab",
            "slug" => "scilab",
            "url" => "https://cdn.simpleicons.org/scilab?viewbox=auto"
            ],
            [
            "title" => "SciPy",
            "slug" => "scipy",
            "url" => "https://cdn.simpleicons.org/scipy?viewbox=auto"
            ],
            [
            "title" => "Scopus",
            "slug" => "scopus",
            "url" => "https://cdn.simpleicons.org/scopus?viewbox=auto"
            ],
            [
            "title" => "SCP Foundation",
            "slug" => "scpfoundation",
            "url" => "https://cdn.simpleicons.org/scpfoundation?viewbox=auto"
            ],
            [
            "title" => "Scrapbox",
            "slug" => "scrapbox",
            "url" => "https://cdn.simpleicons.org/scrapbox?viewbox=auto"
            ],
            [
            "title" => "Scrapy",
            "slug" => "scrapy",
            "url" => "https://cdn.simpleicons.org/scrapy?viewbox=auto"
            ],
            [
            "title" => "Scratch",
            "slug" => "scratch",
            "url" => "https://cdn.simpleicons.org/scratch?viewbox=auto"
            ],
            [
            "title" => "Screencastify",
            "slug" => "screencastify",
            "url" => "https://cdn.simpleicons.org/screencastify?viewbox=auto"
            ],
            [
            "title" => "Scribd",
            "slug" => "scribd",
            "url" => "https://cdn.simpleicons.org/scribd?viewbox=auto"
            ],
            [
            "title" => "Scrimba",
            "slug" => "scrimba",
            "url" => "https://cdn.simpleicons.org/scrimba?viewbox=auto"
            ],
            [
            "title" => "ScrollReveal",
            "slug" => "scrollreveal",
            "url" => "https://cdn.simpleicons.org/scrollreveal?viewbox=auto"
            ],
            [
            "title" => "Scrum Alliance",
            "slug" => "scrumalliance",
            "url" => "https://cdn.simpleicons.org/scrumalliance?viewbox=auto"
            ],
            [
            "title" => "Scrutinizer CI",
            "slug" => "scrutinizerci",
            "url" => "https://cdn.simpleicons.org/scrutinizerci?viewbox=auto"
            ],
            [
            "title" => "ScyllaDB",
            "slug" => "scylladb",
            "url" => "https://cdn.simpleicons.org/scylladb?viewbox=auto"
            ],
            [
            "title" => "Seagate",
            "slug" => "seagate",
            "url" => "https://cdn.simpleicons.org/seagate?viewbox=auto"
            ],
            [
            "title" => "SearXNG",
            "slug" => "searxng",
            "url" => "https://cdn.simpleicons.org/searxng?viewbox=auto"
            ],
            [
            "title" => "SEAT",
            "slug" => "seat",
            "url" => "https://cdn.simpleicons.org/seat?viewbox=auto"
            ],
            [
            "title" => "SeatGeek",
            "slug" => "seatgeek",
            "url" => "https://cdn.simpleicons.org/seatgeek?viewbox=auto"
            ],
            [
            "title" => "SecurityScorecard",
            "slug" => "securityscorecard",
            "url" => "https://cdn.simpleicons.org/securityscorecard?viewbox=auto"
            ],
            [
            "title" => "Sefaria",
            "slug" => "sefaria",
            "url" => "https://cdn.simpleicons.org/sefaria?viewbox=auto"
            ],
            [
            "title" => "Sega",
            "slug" => "sega",
            "url" => "https://cdn.simpleicons.org/sega?viewbox=auto"
            ],
            [
            "title" => "Selenium",
            "slug" => "selenium",
            "url" => "https://cdn.simpleicons.org/selenium?viewbox=auto"
            ],
            [
            "title" => "Sellfy",
            "slug" => "sellfy",
            "url" => "https://cdn.simpleicons.org/sellfy?viewbox=auto"
            ],
            [
            "title" => "Semantic Scholar",
            "slug" => "semanticscholar",
            "url" => "https://cdn.simpleicons.org/semanticscholar?viewbox=auto"
            ],
            [
            "title" => "Semantic UI",
            "slug" => "semanticui",
            "url" => "https://cdn.simpleicons.org/semanticui?viewbox=auto"
            ],
            [
            "title" => "Semantic UI React",
            "slug" => "semanticuireact",
            "url" => "https://cdn.simpleicons.org/semanticuireact?viewbox=auto"
            ],
            [
            "title" => "Semantic Web",
            "slug" => "semanticweb",
            "url" => "https://cdn.simpleicons.org/semanticweb?viewbox=auto"
            ],
            [
            "title" => "semantic-release",
            "slug" => "semanticrelease",
            "url" => "https://cdn.simpleicons.org/semanticrelease?viewbox=auto"
            ],
            [
            "title" => "Semaphore CI",
            "slug" => "semaphoreci",
            "url" => "https://cdn.simpleicons.org/semaphoreci?viewbox=auto"
            ],
            [
            "title" => "Semrush",
            "slug" => "semrush",
            "url" => "https://cdn.simpleicons.org/semrush?viewbox=auto"
            ],
            [
            "title" => "SemVer",
            "slug" => "semver",
            "url" => "https://cdn.simpleicons.org/semver?viewbox=auto"
            ],
            [
            "title" => "Sencha",
            "slug" => "sencha",
            "url" => "https://cdn.simpleicons.org/sencha?viewbox=auto"
            ],
            [
            "title" => "Sennheiser",
            "slug" => "sennheiser",
            "url" => "https://cdn.simpleicons.org/sennheiser?viewbox=auto"
            ],
            [
            "title" => "Sensu",
            "slug" => "sensu",
            "url" => "https://cdn.simpleicons.org/sensu?viewbox=auto"
            ],
            [
            "title" => "Sentry",
            "slug" => "sentry",
            "url" => "https://cdn.simpleicons.org/sentry?viewbox=auto"
            ],
            [
            "title" => "SEPA",
            "slug" => "sepa",
            "url" => "https://cdn.simpleicons.org/sepa?viewbox=auto"
            ],
            [
            "title" => "Sequelize",
            "slug" => "sequelize",
            "url" => "https://cdn.simpleicons.org/sequelize?viewbox=auto"
            ],
            [
            "title" => "Server Fault",
            "slug" => "serverfault",
            "url" => "https://cdn.simpleicons.org/serverfault?viewbox=auto"
            ],
            [
            "title" => "Serverless",
            "slug" => "serverless",
            "url" => "https://cdn.simpleicons.org/serverless?viewbox=auto"
            ],
            [
            "title" => "Session",
            "slug" => "session",
            "url" => "https://cdn.simpleicons.org/session?viewbox=auto"
            ],
            [
            "title" => "Sessionize",
            "slug" => "sessionize",
            "url" => "https://cdn.simpleicons.org/sessionize?viewbox=auto"
            ],
            [
            "title" => "Setapp",
            "slug" => "setapp",
            "url" => "https://cdn.simpleicons.org/setapp?viewbox=auto"
            ],
            [
            "title" => "SFML",
            "slug" => "sfml",
            "url" => "https://cdn.simpleicons.org/sfml?viewbox=auto"
            ],
            [
            "title" => "shadcn/ui",
            "slug" => "shadcnui",
            "url" => "https://cdn.simpleicons.org/shadcnui?viewbox=auto"
            ],
            [
            "title" => "Shadow",
            "slug" => "shadow",
            "url" => "https://cdn.simpleicons.org/shadow?viewbox=auto"
            ],
            [
            "title" => "Shanghai Metro",
            "slug" => "shanghaimetro",
            "url" => "https://cdn.simpleicons.org/shanghaimetro?viewbox=auto"
            ],
            [
            "title" => "ShareX",
            "slug" => "sharex",
            "url" => "https://cdn.simpleicons.org/sharex?viewbox=auto"
            ],
            [
            "title" => "sharp",
            "slug" => "sharp",
            "url" => "https://cdn.simpleicons.org/sharp?viewbox=auto"
            ],
            [
            "title" => "Shazam",
            "slug" => "shazam",
            "url" => "https://cdn.simpleicons.org/shazam?viewbox=auto"
            ],
            [
            "title" => "Shell",
            "slug" => "shell",
            "url" => "https://cdn.simpleicons.org/shell?viewbox=auto"
            ],
            [
            "title" => "Shelly",
            "slug" => "shelly",
            "url" => "https://cdn.simpleicons.org/shelly?viewbox=auto"
            ],
            [
            "title" => "Shenzhen Metro",
            "slug" => "shenzhenmetro",
            "url" => "https://cdn.simpleicons.org/shenzhenmetro?viewbox=auto"
            ],
            [
            "title" => "Shields.io",
            "slug" => "shieldsdotio",
            "url" => "https://cdn.simpleicons.org/shieldsdotio?viewbox=auto"
            ],
            [
            "title" => "Shikimori",
            "slug" => "shikimori",
            "url" => "https://cdn.simpleicons.org/shikimori?viewbox=auto"
            ],
            [
            "title" => "Shopee",
            "slug" => "shopee",
            "url" => "https://cdn.simpleicons.org/shopee?viewbox=auto"
            ],
            [
            "title" => "Shopify",
            "slug" => "shopify",
            "url" => "https://cdn.simpleicons.org/shopify?viewbox=auto"
            ],
            [
            "title" => "Shopware",
            "slug" => "shopware",
            "url" => "https://cdn.simpleicons.org/shopware?viewbox=auto"
            ],
            [
            "title" => "Shortcut",
            "slug" => "shortcut",
            "url" => "https://cdn.simpleicons.org/shortcut?viewbox=auto"
            ],
            [
            "title" => "Showpad",
            "slug" => "showpad",
            "url" => "https://cdn.simpleicons.org/showpad?viewbox=auto"
            ],
            [
            "title" => "Showtime",
            "slug" => "showtime",
            "url" => "https://cdn.simpleicons.org/showtime?viewbox=auto"
            ],
            [
            "title" => "Showwcase",
            "slug" => "showwcase",
            "url" => "https://cdn.simpleicons.org/showwcase?viewbox=auto"
            ],
            [
            "title" => "Shutterstock",
            "slug" => "shutterstock",
            "url" => "https://cdn.simpleicons.org/shutterstock?viewbox=auto"
            ],
            [
            "title" => "Sidekiq",
            "slug" => "sidekiq",
            "url" => "https://cdn.simpleicons.org/sidekiq?viewbox=auto"
            ],
            [
            "title" => "SideQuest",
            "slug" => "sidequest",
            "url" => "https://cdn.simpleicons.org/sidequest?viewbox=auto"
            ],
            [
            "title" => "Siemens",
            "slug" => "siemens",
            "url" => "https://cdn.simpleicons.org/siemens?viewbox=auto"
            ],
            [
            "title" => "SiFive",
            "slug" => "sifive",
            "url" => "https://cdn.simpleicons.org/sifive?viewbox=auto"
            ],
            [
            "title" => "Signal",
            "slug" => "signal",
            "url" => "https://cdn.simpleicons.org/signal?viewbox=auto"
            ],
            [
            "title" => "Similarweb",
            "slug" => "similarweb",
            "url" => "https://cdn.simpleicons.org/similarweb?viewbox=auto"
            ],
            [
            "title" => "Simkl",
            "slug" => "simkl",
            "url" => "https://cdn.simpleicons.org/simkl?viewbox=auto"
            ],
            [
            "title" => "Simple Analytics",
            "slug" => "simpleanalytics",
            "url" => "https://cdn.simpleicons.org/simpleanalytics?viewbox=auto"
            ],
            [
            "title" => "Simple Icons",
            "slug" => "simpleicons",
            "url" => "https://cdn.simpleicons.org/simpleicons?viewbox=auto"
            ],
            [
            "title" => "SimpleLogin",
            "slug" => "simplelogin",
            "url" => "https://cdn.simpleicons.org/simplelogin?viewbox=auto"
            ],
            [
            "title" => "Simplenote",
            "slug" => "simplenote",
            "url" => "https://cdn.simpleicons.org/simplenote?viewbox=auto"
            ],
            [
            "title" => "Sina Weibo",
            "slug" => "sinaweibo",
            "url" => "https://cdn.simpleicons.org/sinaweibo?viewbox=auto"
            ],
            [
            "title" => "Singapore Airlines",
            "slug" => "singaporeairlines",
            "url" => "https://cdn.simpleicons.org/singaporeairlines?viewbox=auto"
            ],
            [
            "title" => "SingleStore",
            "slug" => "singlestore",
            "url" => "https://cdn.simpleicons.org/singlestore?viewbox=auto"
            ],
            [
            "title" => "Sitecore",
            "slug" => "sitecore",
            "url" => "https://cdn.simpleicons.org/sitecore?viewbox=auto"
            ],
            [
            "title" => "SitePoint",
            "slug" => "sitepoint",
            "url" => "https://cdn.simpleicons.org/sitepoint?viewbox=auto"
            ],
            [
            "title" => "SiYuan",
            "slug" => "siyuan",
            "url" => "https://cdn.simpleicons.org/siyuan?viewbox=auto"
            ],
            [
            "title" => "Skaffold",
            "slug" => "skaffold",
            "url" => "https://cdn.simpleicons.org/skaffold?viewbox=auto"
            ],
            [
            "title" => "Sketch",
            "slug" => "sketch",
            "url" => "https://cdn.simpleicons.org/sketch?viewbox=auto"
            ],
            [
            "title" => "Sketchfab",
            "slug" => "sketchfab",
            "url" => "https://cdn.simpleicons.org/sketchfab?viewbox=auto"
            ],
            [
            "title" => "SketchUp",
            "slug" => "sketchup",
            "url" => "https://cdn.simpleicons.org/sketchup?viewbox=auto"
            ],
            [
            "title" => "Skillshare",
            "slug" => "skillshare",
            "url" => "https://cdn.simpleicons.org/skillshare?viewbox=auto"
            ],
            [
            "title" => "ŠKODA",
            "slug" => "skoda",
            "url" => "https://cdn.simpleicons.org/skoda?viewbox=auto"
            ],
            [
            "title" => "Sky",
            "slug" => "sky",
            "url" => "https://cdn.simpleicons.org/sky?viewbox=auto"
            ],
            [
            "title" => "Skypack",
            "slug" => "skypack",
            "url" => "https://cdn.simpleicons.org/skypack?viewbox=auto"
            ],
            [
            "title" => "Skype",
            "slug" => "skype",
            "url" => "https://cdn.simpleicons.org/skype?viewbox=auto"
            ],
            [
            "title" => "Skype for Business",
            "slug" => "skypeforbusiness",
            "url" => "https://cdn.simpleicons.org/skypeforbusiness?viewbox=auto"
            ],
            [
            "title" => "Skyrock",
            "slug" => "skyrock",
            "url" => "https://cdn.simpleicons.org/skyrock?viewbox=auto"
            ],
            [
            "title" => "Slack",
            "slug" => "slack",
            "url" => "https://cdn.simpleicons.org/slack?viewbox=auto"
            ],
            [
            "title" => "Slackware",
            "slug" => "slackware",
            "url" => "https://cdn.simpleicons.org/slackware?viewbox=auto"
            ],
            [
            "title" => "Slashdot",
            "slug" => "slashdot",
            "url" => "https://cdn.simpleicons.org/slashdot?viewbox=auto"
            ],
            [
            "title" => "SlickPic",
            "slug" => "slickpic",
            "url" => "https://cdn.simpleicons.org/slickpic?viewbox=auto"
            ],
            [
            "title" => "Slides",
            "slug" => "slides",
            "url" => "https://cdn.simpleicons.org/slides?viewbox=auto"
            ],
            [
            "title" => "SlideShare",
            "slug" => "slideshare",
            "url" => "https://cdn.simpleicons.org/slideshare?viewbox=auto"
            ],
            [
            "title" => "Slint",
            "slug" => "slint",
            "url" => "https://cdn.simpleicons.org/slint?viewbox=auto"
            ],
            [
            "title" => "smart",
            "slug" => "smart",
            "url" => "https://cdn.simpleicons.org/smart?viewbox=auto"
            ],
            [
            "title" => "SmartThings",
            "slug" => "smartthings",
            "url" => "https://cdn.simpleicons.org/smartthings?viewbox=auto"
            ],
            [
            "title" => "smash.gg",
            "slug" => "smashdotgg",
            "url" => "https://cdn.simpleicons.org/smashdotgg?viewbox=auto"
            ],
            [
            "title" => "Smashing Magazine",
            "slug" => "smashingmagazine",
            "url" => "https://cdn.simpleicons.org/smashingmagazine?viewbox=auto"
            ],
            [
            "title" => "SMRT",
            "slug" => "smrt",
            "url" => "https://cdn.simpleicons.org/smrt?viewbox=auto"
            ],
            [
            "title" => "SmugMug",
            "slug" => "smugmug",
            "url" => "https://cdn.simpleicons.org/smugmug?viewbox=auto"
            ],
            [
            "title" => "Snapchat",
            "slug" => "snapchat",
            "url" => "https://cdn.simpleicons.org/snapchat?viewbox=auto"
            ],
            [
            "title" => "Snapcraft",
            "slug" => "snapcraft",
            "url" => "https://cdn.simpleicons.org/snapcraft?viewbox=auto"
            ],
            [
            "title" => "SNCF",
            "slug" => "sncf",
            "url" => "https://cdn.simpleicons.org/sncf?viewbox=auto"
            ],
            [
            "title" => "Snowflake",
            "slug" => "snowflake",
            "url" => "https://cdn.simpleicons.org/snowflake?viewbox=auto"
            ],
            [
            "title" => "Snowpack",
            "slug" => "snowpack",
            "url" => "https://cdn.simpleicons.org/snowpack?viewbox=auto"
            ],
            [
            "title" => "Snyk",
            "slug" => "snyk",
            "url" => "https://cdn.simpleicons.org/snyk?viewbox=auto"
            ],
            [
            "title" => "Social Blade",
            "slug" => "socialblade",
            "url" => "https://cdn.simpleicons.org/socialblade?viewbox=auto"
            ],
            [
            "title" => "Society6",
            "slug" => "society6",
            "url" => "https://cdn.simpleicons.org/society6?viewbox=auto"
            ],
            [
            "title" => "Socket.io",
            "slug" => "socketdotio",
            "url" => "https://cdn.simpleicons.org/socketdotio?viewbox=auto"
            ],
            [
            "title" => "Softpedia",
            "slug" => "softpedia",
            "url" => "https://cdn.simpleicons.org/softpedia?viewbox=auto"
            ],
            [
            "title" => "Sogou",
            "slug" => "sogou",
            "url" => "https://cdn.simpleicons.org/sogou?viewbox=auto"
            ],
            [
            "title" => "Solana",
            "slug" => "solana",
            "url" => "https://cdn.simpleicons.org/solana?viewbox=auto"
            ],
            [
            "title" => "Solid",
            "slug" => "solid",
            "url" => "https://cdn.simpleicons.org/solid?viewbox=auto"
            ],
            [
            "title" => "Solidity",
            "slug" => "solidity",
            "url" => "https://cdn.simpleicons.org/solidity?viewbox=auto"
            ],
            [
            "title" => "Sololearn",
            "slug" => "sololearn",
            "url" => "https://cdn.simpleicons.org/sololearn?viewbox=auto"
            ],
            [
            "title" => "Solus",
            "slug" => "solus",
            "url" => "https://cdn.simpleicons.org/solus?viewbox=auto"
            ],
            [
            "title" => "Sonar",
            "slug" => "sonar",
            "url" => "https://cdn.simpleicons.org/sonar?viewbox=auto"
            ],
            [
            "title" => "SonarCloud",
            "slug" => "sonarcloud",
            "url" => "https://cdn.simpleicons.org/sonarcloud?viewbox=auto"
            ],
            [
            "title" => "SonarLint",
            "slug" => "sonarlint",
            "url" => "https://cdn.simpleicons.org/sonarlint?viewbox=auto"
            ],
            [
            "title" => "SonarQube",
            "slug" => "sonarqube",
            "url" => "https://cdn.simpleicons.org/sonarqube?viewbox=auto"
            ],
            [
            "title" => "sonarr",
            "slug" => "sonarr",
            "url" => "https://cdn.simpleicons.org/sonarr?viewbox=auto"
            ],
            [
            "title" => "Sonatype",
            "slug" => "sonatype",
            "url" => "https://cdn.simpleicons.org/sonatype?viewbox=auto"
            ],
            [
            "title" => "Songkick",
            "slug" => "songkick",
            "url" => "https://cdn.simpleicons.org/songkick?viewbox=auto"
            ],
            [
            "title" => "Songoda",
            "slug" => "songoda",
            "url" => "https://cdn.simpleicons.org/songoda?viewbox=auto"
            ],
            [
            "title" => "SonicWall",
            "slug" => "sonicwall",
            "url" => "https://cdn.simpleicons.org/sonicwall?viewbox=auto"
            ],
            [
            "title" => "Sonos",
            "slug" => "sonos",
            "url" => "https://cdn.simpleicons.org/sonos?viewbox=auto"
            ],
            [
            "title" => "Sony",
            "slug" => "sony",
            "url" => "https://cdn.simpleicons.org/sony?viewbox=auto"
            ],
            [
            "title" => "Soriana",
            "slug" => "soriana",
            "url" => "https://cdn.simpleicons.org/soriana?viewbox=auto"
            ],
            [
            "title" => "Soundcharts",
            "slug" => "soundcharts",
            "url" => "https://cdn.simpleicons.org/soundcharts?viewbox=auto"
            ],
            [
            "title" => "SoundCloud",
            "slug" => "soundcloud",
            "url" => "https://cdn.simpleicons.org/soundcloud?viewbox=auto"
            ],
            [
            "title" => "Source Engine",
            "slug" => "sourceengine",
            "url" => "https://cdn.simpleicons.org/sourceengine?viewbox=auto"
            ],
            [
            "title" => "SourceForge",
            "slug" => "sourceforge",
            "url" => "https://cdn.simpleicons.org/sourceforge?viewbox=auto"
            ],
            [
            "title" => "SourceHut",
            "slug" => "sourcehut",
            "url" => "https://cdn.simpleicons.org/sourcehut?viewbox=auto"
            ],
            [
            "title" => "Sourcetree",
            "slug" => "sourcetree",
            "url" => "https://cdn.simpleicons.org/sourcetree?viewbox=auto"
            ],
            [
            "title" => "Southwest Airlines",
            "slug" => "southwestairlines",
            "url" => "https://cdn.simpleicons.org/southwestairlines?viewbox=auto"
            ],
            [
            "title" => "Spacemacs",
            "slug" => "spacemacs",
            "url" => "https://cdn.simpleicons.org/spacemacs?viewbox=auto"
            ],
            [
            "title" => "Spaceship",
            "slug" => "spaceship",
            "url" => "https://cdn.simpleicons.org/spaceship?viewbox=auto"
            ],
            [
            "title" => "SpaceX",
            "slug" => "spacex",
            "url" => "https://cdn.simpleicons.org/spacex?viewbox=auto"
            ],
            [
            "title" => "spaCy",
            "slug" => "spacy",
            "url" => "https://cdn.simpleicons.org/spacy?viewbox=auto"
            ],
            [
            "title" => "Spark AR",
            "slug" => "sparkar",
            "url" => "https://cdn.simpleicons.org/sparkar?viewbox=auto"
            ],
            [
            "title" => "Sparkasse",
            "slug" => "sparkasse",
            "url" => "https://cdn.simpleicons.org/sparkasse?viewbox=auto"
            ],
            [
            "title" => "SparkFun",
            "slug" => "sparkfun",
            "url" => "https://cdn.simpleicons.org/sparkfun?viewbox=auto"
            ],
            [
            "title" => "SparkPost",
            "slug" => "sparkpost",
            "url" => "https://cdn.simpleicons.org/sparkpost?viewbox=auto"
            ],
            [
            "title" => "SPDX",
            "slug" => "spdx",
            "url" => "https://cdn.simpleicons.org/spdx?viewbox=auto"
            ],
            [
            "title" => "Speaker Deck",
            "slug" => "speakerdeck",
            "url" => "https://cdn.simpleicons.org/speakerdeck?viewbox=auto"
            ],
            [
            "title" => "Spectrum",
            "slug" => "spectrum",
            "url" => "https://cdn.simpleicons.org/spectrum?viewbox=auto"
            ],
            [
            "title" => "Speedtest",
            "slug" => "speedtest",
            "url" => "https://cdn.simpleicons.org/speedtest?viewbox=auto"
            ],
            [
            "title" => "SpeedyPage",
            "slug" => "speedypage",
            "url" => "https://cdn.simpleicons.org/speedypage?viewbox=auto"
            ],
            [
            "title" => "Sphere Online Judge",
            "slug" => "sphereonlinejudge",
            "url" => "https://cdn.simpleicons.org/sphereonlinejudge?viewbox=auto"
            ],
            [
            "title" => "Sphinx",
            "slug" => "sphinx",
            "url" => "https://cdn.simpleicons.org/sphinx?viewbox=auto"
            ],
            [
            "title" => "SpigotMC",
            "slug" => "spigotmc",
            "url" => "https://cdn.simpleicons.org/spigotmc?viewbox=auto"
            ],
            [
            "title" => "Spine",
            "slug" => "spine",
            "url" => "https://cdn.simpleicons.org/spine?viewbox=auto"
            ],
            [
            "title" => "Spinnaker",
            "slug" => "spinnaker",
            "url" => "https://cdn.simpleicons.org/spinnaker?viewbox=auto"
            ],
            [
            "title" => "Spinrilla",
            "slug" => "spinrilla",
            "url" => "https://cdn.simpleicons.org/spinrilla?viewbox=auto"
            ],
            [
            "title" => "Splunk",
            "slug" => "splunk",
            "url" => "https://cdn.simpleicons.org/splunk?viewbox=auto"
            ],
            [
            "title" => "Spond",
            "slug" => "spond",
            "url" => "https://cdn.simpleicons.org/spond?viewbox=auto"
            ],
            [
            "title" => "Spotify",
            "slug" => "spotify",
            "url" => "https://cdn.simpleicons.org/spotify?viewbox=auto"
            ],
            [
            "title" => "Spotlight",
            "slug" => "spotlight",
            "url" => "https://cdn.simpleicons.org/spotlight?viewbox=auto"
            ],
            [
            "title" => "Spreadshirt",
            "slug" => "spreadshirt",
            "url" => "https://cdn.simpleicons.org/spreadshirt?viewbox=auto"
            ],
            [
            "title" => "Spreaker",
            "slug" => "spreaker",
            "url" => "https://cdn.simpleicons.org/spreaker?viewbox=auto"
            ],
            [
            "title" => "Spring",
            "slug" => "spring",
            "url" => "https://cdn.simpleicons.org/spring?viewbox=auto"
            ],
            [
            "title" => "Spring",
            "slug" => "spring",
            "url" => "https://cdn.simpleicons.org/spring?viewbox=auto"
            ],
            [
            "title" => "Spring Boot",
            "slug" => "springboot",
            "url" => "https://cdn.simpleicons.org/springboot?viewbox=auto"
            ],
            [
            "title" => "Spring Security",
            "slug" => "springsecurity",
            "url" => "https://cdn.simpleicons.org/springsecurity?viewbox=auto"
            ],
            [
            "title" => "Spyder IDE",
            "slug" => "spyderide",
            "url" => "https://cdn.simpleicons.org/spyderide?viewbox=auto"
            ],
            [
            "title" => "SQLAlchemy",
            "slug" => "sqlalchemy",
            "url" => "https://cdn.simpleicons.org/sqlalchemy?viewbox=auto"
            ],
            [
            "title" => "SQLite",
            "slug" => "sqlite",
            "url" => "https://cdn.simpleicons.org/sqlite?viewbox=auto"
            ],
            [
            "title" => "Square",
            "slug" => "square",
            "url" => "https://cdn.simpleicons.org/square?viewbox=auto"
            ],
            [
            "title" => "Square Enix",
            "slug" => "squareenix",
            "url" => "https://cdn.simpleicons.org/squareenix?viewbox=auto"
            ],
            [
            "title" => "Squarespace",
            "slug" => "squarespace",
            "url" => "https://cdn.simpleicons.org/squarespace?viewbox=auto"
            ],
            [
            "title" => "SRG SSR",
            "slug" => "srgssr",
            "url" => "https://cdn.simpleicons.org/srgssr?viewbox=auto"
            ],
            [
            "title" => "SSRN",
            "slug" => "ssrn",
            "url" => "https://cdn.simpleicons.org/ssrn?viewbox=auto"
            ],
            [
            "title" => "SST",
            "slug" => "sst",
            "url" => "https://cdn.simpleicons.org/sst?viewbox=auto"
            ],
            [
            "title" => "Stack Exchange",
            "slug" => "stackexchange",
            "url" => "https://cdn.simpleicons.org/stackexchange?viewbox=auto"
            ],
            [
            "title" => "Stack Overflow",
            "slug" => "stackoverflow",
            "url" => "https://cdn.simpleicons.org/stackoverflow?viewbox=auto"
            ],
            [
            "title" => "Stackbit",
            "slug" => "stackbit",
            "url" => "https://cdn.simpleicons.org/stackbit?viewbox=auto"
            ],
            [
            "title" => "StackBlitz",
            "slug" => "stackblitz",
            "url" => "https://cdn.simpleicons.org/stackblitz?viewbox=auto"
            ],
            [
            "title" => "StackEdit",
            "slug" => "stackedit",
            "url" => "https://cdn.simpleicons.org/stackedit?viewbox=auto"
            ],
            [
            "title" => "StackHawk",
            "slug" => "stackhawk",
            "url" => "https://cdn.simpleicons.org/stackhawk?viewbox=auto"
            ],
            [
            "title" => "StackPath",
            "slug" => "stackpath",
            "url" => "https://cdn.simpleicons.org/stackpath?viewbox=auto"
            ],
            [
            "title" => "StackShare",
            "slug" => "stackshare",
            "url" => "https://cdn.simpleicons.org/stackshare?viewbox=auto"
            ],
            [
            "title" => "Stadia",
            "slug" => "stadia",
            "url" => "https://cdn.simpleicons.org/stadia?viewbox=auto"
            ],
            [
            "title" => "Staffbase",
            "slug" => "staffbase",
            "url" => "https://cdn.simpleicons.org/staffbase?viewbox=auto"
            ],
            [
            "title" => "Stagetimer",
            "slug" => "stagetimer",
            "url" => "https://cdn.simpleicons.org/stagetimer?viewbox=auto"
            ],
            [
            "title" => "Standard Resume",
            "slug" => "standardresume",
            "url" => "https://cdn.simpleicons.org/standardresume?viewbox=auto"
            ],
            [
            "title" => "StandardJS",
            "slug" => "standardjs",
            "url" => "https://cdn.simpleicons.org/standardjs?viewbox=auto"
            ],
            [
            "title" => "Star Trek",
            "slug" => "startrek",
            "url" => "https://cdn.simpleicons.org/startrek?viewbox=auto"
            ],
            [
            "title" => "Starbucks",
            "slug" => "starbucks",
            "url" => "https://cdn.simpleicons.org/starbucks?viewbox=auto"
            ],
            [
            "title" => "Stardock",
            "slug" => "stardock",
            "url" => "https://cdn.simpleicons.org/stardock?viewbox=auto"
            ],
            [
            "title" => "Starling Bank",
            "slug" => "starlingbank",
            "url" => "https://cdn.simpleicons.org/starlingbank?viewbox=auto"
            ],
            [
            "title" => "Starship",
            "slug" => "starship",
            "url" => "https://cdn.simpleicons.org/starship?viewbox=auto"
            ],
            [
            "title" => "STARZ",
            "slug" => "starz",
            "url" => "https://cdn.simpleicons.org/starz?viewbox=auto"
            ],
            [
            "title" => "Statamic",
            "slug" => "statamic",
            "url" => "https://cdn.simpleicons.org/statamic?viewbox=auto"
            ],
            [
            "title" => "Statista",
            "slug" => "statista",
            "url" => "https://cdn.simpleicons.org/statista?viewbox=auto"
            ],
            [
            "title" => "Statuspage",
            "slug" => "statuspage",
            "url" => "https://cdn.simpleicons.org/statuspage?viewbox=auto"
            ],
            [
            "title" => "Statuspal",
            "slug" => "statuspal",
            "url" => "https://cdn.simpleicons.org/statuspal?viewbox=auto"
            ],
            [
            "title" => "Steam",
            "slug" => "steam",
            "url" => "https://cdn.simpleicons.org/steam?viewbox=auto"
            ],
            [
            "title" => "Steam Deck",
            "slug" => "steamdeck",
            "url" => "https://cdn.simpleicons.org/steamdeck?viewbox=auto"
            ],
            [
            "title" => "SteamDB",
            "slug" => "steamdb",
            "url" => "https://cdn.simpleicons.org/steamdb?viewbox=auto"
            ],
            [
            "title" => "Steamworks",
            "slug" => "steamworks",
            "url" => "https://cdn.simpleicons.org/steamworks?viewbox=auto"
            ],
            [
            "title" => "Steelseries",
            "slug" => "steelseries",
            "url" => "https://cdn.simpleicons.org/steelseries?viewbox=auto"
            ],
            [
            "title" => "Steem",
            "slug" => "steem",
            "url" => "https://cdn.simpleicons.org/steem?viewbox=auto"
            ],
            [
            "title" => "Steemit",
            "slug" => "steemit",
            "url" => "https://cdn.simpleicons.org/steemit?viewbox=auto"
            ],
            [
            "title" => "Steinberg",
            "slug" => "steinberg",
            "url" => "https://cdn.simpleicons.org/steinberg?viewbox=auto"
            ],
            [
            "title" => "Stellar",
            "slug" => "stellar",
            "url" => "https://cdn.simpleicons.org/stellar?viewbox=auto"
            ],
            [
            "title" => "Stencil",
            "slug" => "stencil",
            "url" => "https://cdn.simpleicons.org/stencil?viewbox=auto"
            ],
            [
            "title" => "Stencyl",
            "slug" => "stencyl",
            "url" => "https://cdn.simpleicons.org/stencyl?viewbox=auto"
            ],
            [
            "title" => "Stimulus",
            "slug" => "stimulus",
            "url" => "https://cdn.simpleicons.org/stimulus?viewbox=auto"
            ],
            [
            "title" => "Stitcher",
            "slug" => "stitcher",
            "url" => "https://cdn.simpleicons.org/stitcher?viewbox=auto"
            ],
            [
            "title" => "STMicroelectronics",
            "slug" => "stmicroelectronics",
            "url" => "https://cdn.simpleicons.org/stmicroelectronics?viewbox=auto"
            ],
            [
            "title" => "StockX",
            "slug" => "stockx",
            "url" => "https://cdn.simpleicons.org/stockx?viewbox=auto"
            ],
            [
            "title" => "StopStalk",
            "slug" => "stopstalk",
            "url" => "https://cdn.simpleicons.org/stopstalk?viewbox=auto"
            ],
            [
            "title" => "Storyblok",
            "slug" => "storyblok",
            "url" => "https://cdn.simpleicons.org/storyblok?viewbox=auto"
            ],
            [
            "title" => "Storybook",
            "slug" => "storybook",
            "url" => "https://cdn.simpleicons.org/storybook?viewbox=auto"
            ],
            [
            "title" => "Strapi",
            "slug" => "strapi",
            "url" => "https://cdn.simpleicons.org/strapi?viewbox=auto"
            ],
            [
            "title" => "Strava",
            "slug" => "strava",
            "url" => "https://cdn.simpleicons.org/strava?viewbox=auto"
            ],
            [
            "title" => "Streamlabs",
            "slug" => "streamlabs",
            "url" => "https://cdn.simpleicons.org/streamlabs?viewbox=auto"
            ],
            [
            "title" => "Streamlit",
            "slug" => "streamlit",
            "url" => "https://cdn.simpleicons.org/streamlit?viewbox=auto"
            ],
            [
            "title" => "StreamRunners",
            "slug" => "streamrunners",
            "url" => "https://cdn.simpleicons.org/streamrunners?viewbox=auto"
            ],
            [
            "title" => "Stripe",
            "slug" => "stripe",
            "url" => "https://cdn.simpleicons.org/stripe?viewbox=auto"
            ],
            [
            "title" => "strongSwan",
            "slug" => "strongswan",
            "url" => "https://cdn.simpleicons.org/strongswan?viewbox=auto"
            ],
            [
            "title" => "Stryker",
            "slug" => "stryker",
            "url" => "https://cdn.simpleicons.org/stryker?viewbox=auto"
            ],
            [
            "title" => "StubHub",
            "slug" => "stubhub",
            "url" => "https://cdn.simpleicons.org/stubhub?viewbox=auto"
            ],
            [
            "title" => "Studio 3T",
            "slug" => "studio3t",
            "url" => "https://cdn.simpleicons.org/studio3t?viewbox=auto"
            ],
            [
            "title" => "Studyverse",
            "slug" => "studyverse",
            "url" => "https://cdn.simpleicons.org/studyverse?viewbox=auto"
            ],
            [
            "title" => "styled-components",
            "slug" => "styledcomponents",
            "url" => "https://cdn.simpleicons.org/styledcomponents?viewbox=auto"
            ],
            [
            "title" => "stylelint",
            "slug" => "stylelint",
            "url" => "https://cdn.simpleicons.org/stylelint?viewbox=auto"
            ],
            [
            "title" => "StyleShare",
            "slug" => "styleshare",
            "url" => "https://cdn.simpleicons.org/styleshare?viewbox=auto"
            ],
            [
            "title" => "Stylus",
            "slug" => "stylus",
            "url" => "https://cdn.simpleicons.org/stylus?viewbox=auto"
            ],
            [
            "title" => "Subaru",
            "slug" => "subaru",
            "url" => "https://cdn.simpleicons.org/subaru?viewbox=auto"
            ],
            [
            "title" => "Sublime Text",
            "slug" => "sublimetext",
            "url" => "https://cdn.simpleicons.org/sublimetext?viewbox=auto"
            ],
            [
            "title" => "Substack",
            "slug" => "substack",
            "url" => "https://cdn.simpleicons.org/substack?viewbox=auto"
            ],
            [
            "title" => "Subtitle Edit",
            "slug" => "subtitleedit",
            "url" => "https://cdn.simpleicons.org/subtitleedit?viewbox=auto"
            ],
            [
            "title" => "Subversion",
            "slug" => "subversion",
            "url" => "https://cdn.simpleicons.org/subversion?viewbox=auto"
            ],
            [
            "title" => "suckless",
            "slug" => "suckless",
            "url" => "https://cdn.simpleicons.org/suckless?viewbox=auto"
            ],
            [
            "title" => "Sumo Logic",
            "slug" => "sumologic",
            "url" => "https://cdn.simpleicons.org/sumologic?viewbox=auto"
            ],
            [
            "title" => "Sunrise",
            "slug" => "sunrise",
            "url" => "https://cdn.simpleicons.org/sunrise?viewbox=auto"
            ],
            [
            "title" => "Supabase",
            "slug" => "supabase",
            "url" => "https://cdn.simpleicons.org/supabase?viewbox=auto"
            ],
            [
            "title" => "Super User",
            "slug" => "superuser",
            "url" => "https://cdn.simpleicons.org/superuser?viewbox=auto"
            ],
            [
            "title" => "Supercrease",
            "slug" => "supercrease",
            "url" => "https://cdn.simpleicons.org/supercrease?viewbox=auto"
            ],
            [
            "title" => "Supermicro",
            "slug" => "supermicro",
            "url" => "https://cdn.simpleicons.org/supermicro?viewbox=auto"
            ],
            [
            "title" => "SurrealDB",
            "slug" => "surrealdb",
            "url" => "https://cdn.simpleicons.org/surrealdb?viewbox=auto"
            ],
            [
            "title" => "SurveyMonkey",
            "slug" => "surveymonkey",
            "url" => "https://cdn.simpleicons.org/surveymonkey?viewbox=auto"
            ],
            [
            "title" => "SUSE",
            "slug" => "suse",
            "url" => "https://cdn.simpleicons.org/suse?viewbox=auto"
            ],
            [
            "title" => "Suzuki",
            "slug" => "suzuki",
            "url" => "https://cdn.simpleicons.org/suzuki?viewbox=auto"
            ],
            [
            "title" => "Svelte",
            "slug" => "svelte",
            "url" => "https://cdn.simpleicons.org/svelte?viewbox=auto"
            ],
            [
            "title" => "SVG",
            "slug" => "svg",
            "url" => "https://cdn.simpleicons.org/svg?viewbox=auto"
            ],
            [
            "title" => "SVG.js",
            "slug" => "svgdotjs",
            "url" => "https://cdn.simpleicons.org/svgdotjs?viewbox=auto"
            ],
            [
            "title" => "SVGO",
            "slug" => "svgo",
            "url" => "https://cdn.simpleicons.org/svgo?viewbox=auto"
            ],
            [
            "title" => "Swagger",
            "slug" => "swagger",
            "url" => "https://cdn.simpleicons.org/swagger?viewbox=auto"
            ],
            [
            "title" => "Swarm",
            "slug" => "swarm",
            "url" => "https://cdn.simpleicons.org/swarm?viewbox=auto"
            ],
            [
            "title" => "SWC",
            "slug" => "swc",
            "url" => "https://cdn.simpleicons.org/swc?viewbox=auto"
            ],
            [
            "title" => "Swift",
            "slug" => "swift",
            "url" => "https://cdn.simpleicons.org/swift?viewbox=auto"
            ],
            [
            "title" => "Swiggy",
            "slug" => "swiggy",
            "url" => "https://cdn.simpleicons.org/swiggy?viewbox=auto"
            ],
            [
            "title" => "Swiper",
            "slug" => "swiper",
            "url" => "https://cdn.simpleicons.org/swiper?viewbox=auto"
            ],
            [
            "title" => "SWR",
            "slug" => "swr",
            "url" => "https://cdn.simpleicons.org/swr?viewbox=auto"
            ],
            [
            "title" => "Symantec",
            "slug" => "symantec",
            "url" => "https://cdn.simpleicons.org/symantec?viewbox=auto"
            ],
            [
            "title" => "Symbolab",
            "slug" => "symbolab",
            "url" => "https://cdn.simpleicons.org/symbolab?viewbox=auto"
            ],
            [
            "title" => "Symfony",
            "slug" => "symfony",
            "url" => "https://cdn.simpleicons.org/symfony?viewbox=auto"
            ],
            [
            "title" => "Symphony",
            "slug" => "symphony",
            "url" => "https://cdn.simpleicons.org/symphony?viewbox=auto"
            ],
            [
            "title" => "SymPy",
            "slug" => "sympy",
            "url" => "https://cdn.simpleicons.org/sympy?viewbox=auto"
            ],
            [
            "title" => "Syncthing",
            "slug" => "syncthing",
            "url" => "https://cdn.simpleicons.org/syncthing?viewbox=auto"
            ],
            [
            "title" => "Synology",
            "slug" => "synology",
            "url" => "https://cdn.simpleicons.org/synology?viewbox=auto"
            ],
            [
            "title" => "System76",
            "slug" => "system76",
            "url" => "https://cdn.simpleicons.org/system76?viewbox=auto"
            ],
            [
            "title" => "T-Mobile",
            "slug" => "tmobile",
            "url" => "https://cdn.simpleicons.org/tmobile?viewbox=auto"
            ],
            [
            "title" => "Tabelog",
            "slug" => "tabelog",
            "url" => "https://cdn.simpleicons.org/tabelog?viewbox=auto"
            ],
            [
            "title" => "Tableau",
            "slug" => "tableau",
            "url" => "https://cdn.simpleicons.org/tableau?viewbox=auto"
            ],
            [
            "title" => "TableCheck",
            "slug" => "tablecheck",
            "url" => "https://cdn.simpleicons.org/tablecheck?viewbox=auto"
            ],
            [
            "title" => "Taco Bell",
            "slug" => "tacobell",
            "url" => "https://cdn.simpleicons.org/tacobell?viewbox=auto"
            ],
            [
            "title" => "tado°",
            "slug" => "tado",
            "url" => "https://cdn.simpleicons.org/tado?viewbox=auto"
            ],
            [
            "title" => "Taichi Graphics",
            "slug" => "taichigraphics",
            "url" => "https://cdn.simpleicons.org/taichigraphics?viewbox=auto"
            ],
            [
            "title" => "Taichi Lang",
            "slug" => "taichilang",
            "url" => "https://cdn.simpleicons.org/taichilang?viewbox=auto"
            ],
            [
            "title" => "Tails",
            "slug" => "tails",
            "url" => "https://cdn.simpleicons.org/tails?viewbox=auto"
            ],
            [
            "title" => "Tailscale",
            "slug" => "tailscale",
            "url" => "https://cdn.simpleicons.org/tailscale?viewbox=auto"
            ],
            [
            "title" => "Tailwind CSS",
            "slug" => "tailwindcss",
            "url" => "https://cdn.simpleicons.org/tailwindcss?viewbox=auto"
            ],
            [
            "title" => "Taipy",
            "slug" => "taipy",
            "url" => "https://cdn.simpleicons.org/taipy?viewbox=auto"
            ],
            [
            "title" => "Take-Two Interactive Software",
            "slug" => "taketwointeractivesoftware",
            "url" => "https://cdn.simpleicons.org/taketwointeractivesoftware?viewbox=auto"
            ],
            [
            "title" => "Talend",
            "slug" => "talend",
            "url" => "https://cdn.simpleicons.org/talend?viewbox=auto"
            ],
            [
            "title" => "Talenthouse",
            "slug" => "talenthouse",
            "url" => "https://cdn.simpleicons.org/talenthouse?viewbox=auto"
            ],
            [
            "title" => "Talos",
            "slug" => "talos",
            "url" => "https://cdn.simpleicons.org/talos?viewbox=auto"
            ],
            [
            "title" => "Tamiya",
            "slug" => "tamiya",
            "url" => "https://cdn.simpleicons.org/tamiya?viewbox=auto"
            ],
            [
            "title" => "Tampermonkey",
            "slug" => "tampermonkey",
            "url" => "https://cdn.simpleicons.org/tampermonkey?viewbox=auto"
            ],
            [
            "title" => "Taobao",
            "slug" => "taobao",
            "url" => "https://cdn.simpleicons.org/taobao?viewbox=auto"
            ],
            [
            "title" => "Tapas",
            "slug" => "tapas",
            "url" => "https://cdn.simpleicons.org/tapas?viewbox=auto"
            ],
            [
            "title" => "Target",
            "slug" => "target",
            "url" => "https://cdn.simpleicons.org/target?viewbox=auto"
            ],
            [
            "title" => "Task",
            "slug" => "task",
            "url" => "https://cdn.simpleicons.org/task?viewbox=auto"
            ],
            [
            "title" => "Tasmota",
            "slug" => "tasmota",
            "url" => "https://cdn.simpleicons.org/tasmota?viewbox=auto"
            ],
            [
            "title" => "Tata",
            "slug" => "tata",
            "url" => "https://cdn.simpleicons.org/tata?viewbox=auto"
            ],
            [
            "title" => "Tata Consultancy Services",
            "slug" => "tataconsultancyservices",
            "url" => "https://cdn.simpleicons.org/tataconsultancyservices?viewbox=auto"
            ],
            [
            "title" => "Tauri",
            "slug" => "tauri",
            "url" => "https://cdn.simpleicons.org/tauri?viewbox=auto"
            ],
            [
            "title" => "TaxBuzz",
            "slug" => "taxbuzz",
            "url" => "https://cdn.simpleicons.org/taxbuzz?viewbox=auto"
            ],
            [
            "title" => "Teal",
            "slug" => "teal",
            "url" => "https://cdn.simpleicons.org/teal?viewbox=auto"
            ],
            [
            "title" => "TeamCity",
            "slug" => "teamcity",
            "url" => "https://cdn.simpleicons.org/teamcity?viewbox=auto"
            ],
            [
            "title" => "TeamSpeak",
            "slug" => "teamspeak",
            "url" => "https://cdn.simpleicons.org/teamspeak?viewbox=auto"
            ],
            [
            "title" => "TeamViewer",
            "slug" => "teamviewer",
            "url" => "https://cdn.simpleicons.org/teamviewer?viewbox=auto"
            ],
            [
            "title" => "TED",
            "slug" => "ted",
            "url" => "https://cdn.simpleicons.org/ted?viewbox=auto"
            ],
            [
            "title" => "TeePublic",
            "slug" => "teepublic",
            "url" => "https://cdn.simpleicons.org/teepublic?viewbox=auto"
            ],
            [
            "title" => "Teespring",
            "slug" => "teespring",
            "url" => "https://cdn.simpleicons.org/teespring?viewbox=auto"
            ],
            [
            "title" => "Tekton",
            "slug" => "tekton",
            "url" => "https://cdn.simpleicons.org/tekton?viewbox=auto"
            ],
            [
            "title" => "TELE 5",
            "slug" => "tele5",
            "url" => "https://cdn.simpleicons.org/tele5?viewbox=auto"
            ],
            [
            "title" => "Télé-Québec",
            "slug" => "telequebec",
            "url" => "https://cdn.simpleicons.org/telequebec?viewbox=auto"
            ],
            [
            "title" => "Telegram",
            "slug" => "telegram",
            "url" => "https://cdn.simpleicons.org/telegram?viewbox=auto"
            ],
            [
            "title" => "Telegraph",
            "slug" => "telegraph",
            "url" => "https://cdn.simpleicons.org/telegraph?viewbox=auto"
            ],
            [
            "title" => "Temporal",
            "slug" => "temporal",
            "url" => "https://cdn.simpleicons.org/temporal?viewbox=auto"
            ],
            [
            "title" => "Tencent QQ",
            "slug" => "tencentqq",
            "url" => "https://cdn.simpleicons.org/tencentqq?viewbox=auto"
            ],
            [
            "title" => "TensorFlow",
            "slug" => "tensorflow",
            "url" => "https://cdn.simpleicons.org/tensorflow?viewbox=auto"
            ],
            [
            "title" => "Teradata",
            "slug" => "teradata",
            "url" => "https://cdn.simpleicons.org/teradata?viewbox=auto"
            ],
            [
            "title" => "teratail",
            "slug" => "teratail",
            "url" => "https://cdn.simpleicons.org/teratail?viewbox=auto"
            ],
            [
            "title" => "Termius",
            "slug" => "termius",
            "url" => "https://cdn.simpleicons.org/termius?viewbox=auto"
            ],
            [
            "title" => "Terraform",
            "slug" => "terraform",
            "url" => "https://cdn.simpleicons.org/terraform?viewbox=auto"
            ],
            [
            "title" => "Tesco",
            "slug" => "tesco",
            "url" => "https://cdn.simpleicons.org/tesco?viewbox=auto"
            ],
            [
            "title" => "Tesla",
            "slug" => "tesla",
            "url" => "https://cdn.simpleicons.org/tesla?viewbox=auto"
            ],
            [
            "title" => "TestCafe",
            "slug" => "testcafe",
            "url" => "https://cdn.simpleicons.org/testcafe?viewbox=auto"
            ],
            [
            "title" => "Testin",
            "slug" => "testin",
            "url" => "https://cdn.simpleicons.org/testin?viewbox=auto"
            ],
            [
            "title" => "Testing Library",
            "slug" => "testinglibrary",
            "url" => "https://cdn.simpleicons.org/testinglibrary?viewbox=auto"
            ],
            [
            "title" => "TestRail",
            "slug" => "testrail",
            "url" => "https://cdn.simpleicons.org/testrail?viewbox=auto"
            ],
            [
            "title" => "Tether",
            "slug" => "tether",
            "url" => "https://cdn.simpleicons.org/tether?viewbox=auto"
            ],
            [
            "title" => "Textpattern",
            "slug" => "textpattern",
            "url" => "https://cdn.simpleicons.org/textpattern?viewbox=auto"
            ],
            [
            "title" => "TGA",
            "slug" => "tga",
            "url" => "https://cdn.simpleicons.org/tga?viewbox=auto"
            ],
            [
            "title" => "Thangs",
            "slug" => "thangs",
            "url" => "https://cdn.simpleicons.org/thangs?viewbox=auto"
            ],
            [
            "title" => "The Algorithms",
            "slug" => "thealgorithms",
            "url" => "https://cdn.simpleicons.org/thealgorithms?viewbox=auto"
            ],
            [
            "title" => "The Boring Company",
            "slug" => "theboringcompany",
            "url" => "https://cdn.simpleicons.org/theboringcompany?viewbox=auto"
            ],
            [
            "title" => "The Conversation",
            "slug" => "theconversation",
            "url" => "https://cdn.simpleicons.org/theconversation?viewbox=auto"
            ],
            [
            "title" => "THE FINALS",
            "slug" => "thefinals",
            "url" => "https://cdn.simpleicons.org/thefinals?viewbox=auto"
            ],
            [
            "title" => "The Irish Times",
            "slug" => "theirishtimes",
            "url" => "https://cdn.simpleicons.org/theirishtimes?viewbox=auto"
            ],
            [
            "title" => "The Mighty",
            "slug" => "themighty",
            "url" => "https://cdn.simpleicons.org/themighty?viewbox=auto"
            ],
            [
            "title" => "The Models Resource",
            "slug" => "themodelsresource",
            "url" => "https://cdn.simpleicons.org/themodelsresource?viewbox=auto"
            ],
            [
            "title" => "The Movie Database",
            "slug" => "themoviedatabase",
            "url" => "https://cdn.simpleicons.org/themoviedatabase?viewbox=auto"
            ],
            [
            "title" => "The North Face",
            "slug" => "thenorthface",
            "url" => "https://cdn.simpleicons.org/thenorthface?viewbox=auto"
            ],
            [
            "title" => "The Odin Project",
            "slug" => "theodinproject",
            "url" => "https://cdn.simpleicons.org/theodinproject?viewbox=auto"
            ],
            [
            "title" => "The Register",
            "slug" => "theregister",
            "url" => "https://cdn.simpleicons.org/theregister?viewbox=auto"
            ],
            [
            "title" => "The Sounds Resource",
            "slug" => "thesoundsresource",
            "url" => "https://cdn.simpleicons.org/thesoundsresource?viewbox=auto"
            ],
            [
            "title" => "The Spriters Resource",
            "slug" => "thespritersresource",
            "url" => "https://cdn.simpleicons.org/thespritersresource?viewbox=auto"
            ],
            [
            "title" => "The Washington Post",
            "slug" => "thewashingtonpost",
            "url" => "https://cdn.simpleicons.org/thewashingtonpost?viewbox=auto"
            ],
            [
            "title" => "Thingiverse",
            "slug" => "thingiverse",
            "url" => "https://cdn.simpleicons.org/thingiverse?viewbox=auto"
            ],
            [
            "title" => "ThinkPad",
            "slug" => "thinkpad",
            "url" => "https://cdn.simpleicons.org/thinkpad?viewbox=auto"
            ],
            [
            "title" => "thirdweb",
            "slug" => "thirdweb",
            "url" => "https://cdn.simpleicons.org/thirdweb?viewbox=auto"
            ],
            [
            "title" => "Threadless",
            "slug" => "threadless",
            "url" => "https://cdn.simpleicons.org/threadless?viewbox=auto"
            ],
            [
            "title" => "Threads",
            "slug" => "threads",
            "url" => "https://cdn.simpleicons.org/threads?viewbox=auto"
            ],
            [
            "title" => "Three.js",
            "slug" => "threedotjs",
            "url" => "https://cdn.simpleicons.org/threedotjs?viewbox=auto"
            ],
            [
            "title" => "Threema",
            "slug" => "threema",
            "url" => "https://cdn.simpleicons.org/threema?viewbox=auto"
            ],
            [
            "title" => "Thumbtack",
            "slug" => "thumbtack",
            "url" => "https://cdn.simpleicons.org/thumbtack?viewbox=auto"
            ],
            [
            "title" => "Thunderbird",
            "slug" => "thunderbird",
            "url" => "https://cdn.simpleicons.org/thunderbird?viewbox=auto"
            ],
            [
            "title" => "Thunderstore",
            "slug" => "thunderstore",
            "url" => "https://cdn.simpleicons.org/thunderstore?viewbox=auto"
            ],
            [
            "title" => "Thurgauer Kantonalbank",
            "slug" => "thurgauerkantonalbank",
            "url" => "https://cdn.simpleicons.org/thurgauerkantonalbank?viewbox=auto"
            ],
            [
            "title" => "Thymeleaf",
            "slug" => "thymeleaf",
            "url" => "https://cdn.simpleicons.org/thymeleaf?viewbox=auto"
            ],
            [
            "title" => "Ticketmaster",
            "slug" => "ticketmaster",
            "url" => "https://cdn.simpleicons.org/ticketmaster?viewbox=auto"
            ],
            [
            "title" => "TickTick",
            "slug" => "ticktick",
            "url" => "https://cdn.simpleicons.org/ticktick?viewbox=auto"
            ],
            [
            "title" => "Tidal",
            "slug" => "tidal",
            "url" => "https://cdn.simpleicons.org/tidal?viewbox=auto"
            ],
            [
            "title" => "TiddlyWiki",
            "slug" => "tiddlywiki",
            "url" => "https://cdn.simpleicons.org/tiddlywiki?viewbox=auto"
            ],
            [
            "title" => "Tide",
            "slug" => "tide",
            "url" => "https://cdn.simpleicons.org/tide?viewbox=auto"
            ],
            [
            "title" => "Tidyverse",
            "slug" => "tidyverse",
            "url" => "https://cdn.simpleicons.org/tidyverse?viewbox=auto"
            ],
            [
            "title" => "TietoEVRY",
            "slug" => "tietoevry",
            "url" => "https://cdn.simpleicons.org/tietoevry?viewbox=auto"
            ],
            [
            "title" => "TikTok",
            "slug" => "tiktok",
            "url" => "https://cdn.simpleicons.org/tiktok?viewbox=auto"
            ],
            [
            "title" => "Tilda Publishing",
            "slug" => "tildapublishing",
            "url" => "https://cdn.simpleicons.org/tildapublishing?viewbox=auto"
            ],
            [
            "title" => "Tile",
            "slug" => "tile",
            "url" => "https://cdn.simpleicons.org/tile?viewbox=auto"
            ],
            [
            "title" => "Timescale",
            "slug" => "timescale",
            "url" => "https://cdn.simpleicons.org/timescale?viewbox=auto"
            ],
            [
            "title" => "Tina",
            "slug" => "tina",
            "url" => "https://cdn.simpleicons.org/tina?viewbox=auto"
            ],
            [
            "title" => "Tinder",
            "slug" => "tinder",
            "url" => "https://cdn.simpleicons.org/tinder?viewbox=auto"
            ],
            [
            "title" => "Tindie",
            "slug" => "tindie",
            "url" => "https://cdn.simpleicons.org/tindie?viewbox=auto"
            ],
            [
            "title" => "Tinkercad",
            "slug" => "tinkercad",
            "url" => "https://cdn.simpleicons.org/tinkercad?viewbox=auto"
            ],
            [
            "title" => "tinygrad",
            "slug" => "tinygrad",
            "url" => "https://cdn.simpleicons.org/tinygrad?viewbox=auto"
            ],
            [
            "title" => "TinyLetter",
            "slug" => "tinyletter",
            "url" => "https://cdn.simpleicons.org/tinyletter?viewbox=auto"
            ],
            [
            "title" => "Tistory",
            "slug" => "tistory",
            "url" => "https://cdn.simpleicons.org/tistory?viewbox=auto"
            ],
            [
            "title" => "tldraw",
            "slug" => "tldraw",
            "url" => "https://cdn.simpleicons.org/tldraw?viewbox=auto"
            ],
            [
            "title" => "tmux",
            "slug" => "tmux",
            "url" => "https://cdn.simpleicons.org/tmux?viewbox=auto"
            ],
            [
            "title" => "Todoist",
            "slug" => "todoist",
            "url" => "https://cdn.simpleicons.org/todoist?viewbox=auto"
            ],
            [
            "title" => "Toggl",
            "slug" => "toggl",
            "url" => "https://cdn.simpleicons.org/toggl?viewbox=auto"
            ],
            [
            "title" => "Toggl Track",
            "slug" => "toggltrack",
            "url" => "https://cdn.simpleicons.org/toggltrack?viewbox=auto"
            ],
            [
            "title" => "Tokyo Metro",
            "slug" => "tokyometro",
            "url" => "https://cdn.simpleicons.org/tokyometro?viewbox=auto"
            ],
            [
            "title" => "Toll",
            "slug" => "toll",
            "url" => "https://cdn.simpleicons.org/toll?viewbox=auto"
            ],
            [
            "title" => "TOML",
            "slug" => "toml",
            "url" => "https://cdn.simpleicons.org/toml?viewbox=auto"
            ],
            [
            "title" => "Tomorrowland",
            "slug" => "tomorrowland",
            "url" => "https://cdn.simpleicons.org/tomorrowland?viewbox=auto"
            ],
            [
            "title" => "TON",
            "slug" => "ton",
            "url" => "https://cdn.simpleicons.org/ton?viewbox=auto"
            ],
            [
            "title" => "Top.gg",
            "slug" => "topdotgg",
            "url" => "https://cdn.simpleicons.org/topdotgg?viewbox=auto"
            ],
            [
            "title" => "Topcoder",
            "slug" => "topcoder",
            "url" => "https://cdn.simpleicons.org/topcoder?viewbox=auto"
            ],
            [
            "title" => "Toptal",
            "slug" => "toptal",
            "url" => "https://cdn.simpleicons.org/toptal?viewbox=auto"
            ],
            [
            "title" => "Tor Browser",
            "slug" => "torbrowser",
            "url" => "https://cdn.simpleicons.org/torbrowser?viewbox=auto"
            ],
            [
            "title" => "Tor Project",
            "slug" => "torproject",
            "url" => "https://cdn.simpleicons.org/torproject?viewbox=auto"
            ],
            [
            "title" => "Toshiba",
            "slug" => "toshiba",
            "url" => "https://cdn.simpleicons.org/toshiba?viewbox=auto"
            ],
            [
            "title" => "TOTVS",
            "slug" => "totvs",
            "url" => "https://cdn.simpleicons.org/totvs?viewbox=auto"
            ],
            [
            "title" => "TourBox",
            "slug" => "tourbox",
            "url" => "https://cdn.simpleicons.org/tourbox?viewbox=auto"
            ],
            [
            "title" => "Toyota",
            "slug" => "toyota",
            "url" => "https://cdn.simpleicons.org/toyota?viewbox=auto"
            ],
            [
            "title" => "TP-Link",
            "slug" => "tplink",
            "url" => "https://cdn.simpleicons.org/tplink?viewbox=auto"
            ],
            [
            "title" => "tqdm",
            "slug" => "tqdm",
            "url" => "https://cdn.simpleicons.org/tqdm?viewbox=auto"
            ],
            [
            "title" => "Traccar",
            "slug" => "traccar",
            "url" => "https://cdn.simpleicons.org/traccar?viewbox=auto"
            ],
            [
            "title" => "TradingView",
            "slug" => "tradingview",
            "url" => "https://cdn.simpleicons.org/tradingview?viewbox=auto"
            ],
            [
            "title" => "Traefik Mesh",
            "slug" => "traefikmesh",
            "url" => "https://cdn.simpleicons.org/traefikmesh?viewbox=auto"
            ],
            [
            "title" => "Traefik Proxy",
            "slug" => "traefikproxy",
            "url" => "https://cdn.simpleicons.org/traefikproxy?viewbox=auto"
            ],
            [
            "title" => "Trailforks",
            "slug" => "trailforks",
            "url" => "https://cdn.simpleicons.org/trailforks?viewbox=auto"
            ],
            [
            "title" => "TrainerRoad",
            "slug" => "trainerroad",
            "url" => "https://cdn.simpleicons.org/trainerroad?viewbox=auto"
            ],
            [
            "title" => "Trakt",
            "slug" => "trakt",
            "url" => "https://cdn.simpleicons.org/trakt?viewbox=auto"
            ],
            [
            "title" => "Transifex",
            "slug" => "transifex",
            "url" => "https://cdn.simpleicons.org/transifex?viewbox=auto"
            ],
            [
            "title" => "Transmission",
            "slug" => "transmission",
            "url" => "https://cdn.simpleicons.org/transmission?viewbox=auto"
            ],
            [
            "title" => "Transport for Ireland",
            "slug" => "transportforireland",
            "url" => "https://cdn.simpleicons.org/transportforireland?viewbox=auto"
            ],
            [
            "title" => "Transport for London",
            "slug" => "transportforlondon",
            "url" => "https://cdn.simpleicons.org/transportforlondon?viewbox=auto"
            ],
            [
            "title" => "Travis CI",
            "slug" => "travisci",
            "url" => "https://cdn.simpleicons.org/travisci?viewbox=auto"
            ],
            [
            "title" => "Treehouse",
            "slug" => "treehouse",
            "url" => "https://cdn.simpleicons.org/treehouse?viewbox=auto"
            ],
            [
            "title" => "Trello",
            "slug" => "trello",
            "url" => "https://cdn.simpleicons.org/trello?viewbox=auto"
            ],
            [
            "title" => "Trend Micro",
            "slug" => "trendmicro",
            "url" => "https://cdn.simpleicons.org/trendmicro?viewbox=auto"
            ],
            [
            "title" => "Treyarch",
            "slug" => "treyarch",
            "url" => "https://cdn.simpleicons.org/treyarch?viewbox=auto"
            ],
            [
            "title" => "Tricentis",
            "slug" => "tricentis",
            "url" => "https://cdn.simpleicons.org/tricentis?viewbox=auto"
            ],
            [
            "title" => "Trilium",
            "slug" => "trilium",
            "url" => "https://cdn.simpleicons.org/trilium?viewbox=auto"
            ],
            [
            "title" => "Triller",
            "slug" => "triller",
            "url" => "https://cdn.simpleicons.org/triller?viewbox=auto"
            ],
            [
            "title" => "TrillerTV",
            "slug" => "trillertv",
            "url" => "https://cdn.simpleicons.org/trillertv?viewbox=auto"
            ],
            [
            "title" => "Trino",
            "slug" => "trino",
            "url" => "https://cdn.simpleicons.org/trino?viewbox=auto"
            ],
            [
            "title" => "Trip.com",
            "slug" => "tripdotcom",
            "url" => "https://cdn.simpleicons.org/tripdotcom?viewbox=auto"
            ],
            [
            "title" => "Tripadvisor",
            "slug" => "tripadvisor",
            "url" => "https://cdn.simpleicons.org/tripadvisor?viewbox=auto"
            ],
            [
            "title" => "Trivy",
            "slug" => "trivy",
            "url" => "https://cdn.simpleicons.org/trivy?viewbox=auto"
            ],
            [
            "title" => "Trove",
            "slug" => "trove",
            "url" => "https://cdn.simpleicons.org/trove?viewbox=auto"
            ],
            [
            "title" => "tRPC",
            "slug" => "trpc",
            "url" => "https://cdn.simpleicons.org/trpc?viewbox=auto"
            ],
            [
            "title" => "TrueNAS",
            "slug" => "truenas",
            "url" => "https://cdn.simpleicons.org/truenas?viewbox=auto"
            ],
            [
            "title" => "TrueUp",
            "slug" => "trueup",
            "url" => "https://cdn.simpleicons.org/trueup?viewbox=auto"
            ],
            [
            "title" => "trulia",
            "slug" => "trulia",
            "url" => "https://cdn.simpleicons.org/trulia?viewbox=auto"
            ],
            [
            "title" => "Trusted Shops",
            "slug" => "trustedshops",
            "url" => "https://cdn.simpleicons.org/trustedshops?viewbox=auto"
            ],
            [
            "title" => "Trustpilot",
            "slug" => "trustpilot",
            "url" => "https://cdn.simpleicons.org/trustpilot?viewbox=auto"
            ],
            [
            "title" => "Try It Online",
            "slug" => "tryitonline",
            "url" => "https://cdn.simpleicons.org/tryitonline?viewbox=auto"
            ],
            [
            "title" => "TryHackMe",
            "slug" => "tryhackme",
            "url" => "https://cdn.simpleicons.org/tryhackme?viewbox=auto"
            ],
            [
            "title" => "ts-node",
            "slug" => "tsnode",
            "url" => "https://cdn.simpleicons.org/tsnode?viewbox=auto"
            ],
            [
            "title" => "Tubi",
            "slug" => "tubi",
            "url" => "https://cdn.simpleicons.org/tubi?viewbox=auto"
            ],
            [
            "title" => "TUI",
            "slug" => "tui",
            "url" => "https://cdn.simpleicons.org/tui?viewbox=auto"
            ],
            [
            "title" => "Tumblr",
            "slug" => "tumblr",
            "url" => "https://cdn.simpleicons.org/tumblr?viewbox=auto"
            ],
            [
            "title" => "TuneIn",
            "slug" => "tunein",
            "url" => "https://cdn.simpleicons.org/tunein?viewbox=auto"
            ],
            [
            "title" => "Turbo",
            "slug" => "turbo",
            "url" => "https://cdn.simpleicons.org/turbo?viewbox=auto"
            ],
            [
            "title" => "Turborepo",
            "slug" => "turborepo",
            "url" => "https://cdn.simpleicons.org/turborepo?viewbox=auto"
            ],
            [
            "title" => "TurboSquid",
            "slug" => "turbosquid",
            "url" => "https://cdn.simpleicons.org/turbosquid?viewbox=auto"
            ],
            [
            "title" => "Turkish Airlines",
            "slug" => "turkishairlines",
            "url" => "https://cdn.simpleicons.org/turkishairlines?viewbox=auto"
            ],
            [
            "title" => "Turso",
            "slug" => "turso",
            "url" => "https://cdn.simpleicons.org/turso?viewbox=auto"
            ],
            [
            "title" => "Tutanota",
            "slug" => "tutanota",
            "url" => "https://cdn.simpleicons.org/tutanota?viewbox=auto"
            ],
            [
            "title" => "TV Time",
            "slug" => "tvtime",
            "url" => "https://cdn.simpleicons.org/tvtime?viewbox=auto"
            ],
            [
            "title" => "TV4 Play",
            "slug" => "tv4play",
            "url" => "https://cdn.simpleicons.org/tv4play?viewbox=auto"
            ],
            [
            "title" => "Twilio",
            "slug" => "twilio",
            "url" => "https://cdn.simpleicons.org/twilio?viewbox=auto"
            ],
            [
            "title" => "Twinkly",
            "slug" => "twinkly",
            "url" => "https://cdn.simpleicons.org/twinkly?viewbox=auto"
            ],
            [
            "title" => "Twinmotion",
            "slug" => "twinmotion",
            "url" => "https://cdn.simpleicons.org/twinmotion?viewbox=auto"
            ],
            [
            "title" => "Twitch",
            "slug" => "twitch",
            "url" => "https://cdn.simpleicons.org/twitch?viewbox=auto"
            ],
            [
            "title" => "Typeform",
            "slug" => "typeform",
            "url" => "https://cdn.simpleicons.org/typeform?viewbox=auto"
            ],
            [
            "title" => "Typer",
            "slug" => "typer",
            "url" => "https://cdn.simpleicons.org/typer?viewbox=auto"
            ],
            [
            "title" => "TypeScript",
            "slug" => "typescript",
            "url" => "https://cdn.simpleicons.org/typescript?viewbox=auto"
            ],
            [
            "title" => "TYPO3",
            "slug" => "typo3",
            "url" => "https://cdn.simpleicons.org/typo3?viewbox=auto"
            ],
            [
            "title" => "Typst",
            "slug" => "typst",
            "url" => "https://cdn.simpleicons.org/typst?viewbox=auto"
            ],
            [
            "title" => "Uber",
            "slug" => "uber",
            "url" => "https://cdn.simpleicons.org/uber?viewbox=auto"
            ],
            [
            "title" => "Uber Eats",
            "slug" => "ubereats",
            "url" => "https://cdn.simpleicons.org/ubereats?viewbox=auto"
            ],
            [
            "title" => "Ubiquiti",
            "slug" => "ubiquiti",
            "url" => "https://cdn.simpleicons.org/ubiquiti?viewbox=auto"
            ],
            [
            "title" => "Ubisoft",
            "slug" => "ubisoft",
            "url" => "https://cdn.simpleicons.org/ubisoft?viewbox=auto"
            ],
            [
            "title" => "uBlock Origin",
            "slug" => "ublockorigin",
            "url" => "https://cdn.simpleicons.org/ublockorigin?viewbox=auto"
            ],
            [
            "title" => "Ubuntu",
            "slug" => "ubuntu",
            "url" => "https://cdn.simpleicons.org/ubuntu?viewbox=auto"
            ],
            [
            "title" => "Ubuntu MATE",
            "slug" => "ubuntumate",
            "url" => "https://cdn.simpleicons.org/ubuntumate?viewbox=auto"
            ],
            [
            "title" => "Udacity",
            "slug" => "udacity",
            "url" => "https://cdn.simpleicons.org/udacity?viewbox=auto"
            ],
            [
            "title" => "Udemy",
            "slug" => "udemy",
            "url" => "https://cdn.simpleicons.org/udemy?viewbox=auto"
            ],
            [
            "title" => "UFC",
            "slug" => "ufc",
            "url" => "https://cdn.simpleicons.org/ufc?viewbox=auto"
            ],
            [
            "title" => "UIkit",
            "slug" => "uikit",
            "url" => "https://cdn.simpleicons.org/uikit?viewbox=auto"
            ],
            [
            "title" => "UiPath",
            "slug" => "uipath",
            "url" => "https://cdn.simpleicons.org/uipath?viewbox=auto"
            ],
            [
            "title" => "Ulule",
            "slug" => "ulule",
            "url" => "https://cdn.simpleicons.org/ulule?viewbox=auto"
            ],
            [
            "title" => "Umami",
            "slug" => "umami",
            "url" => "https://cdn.simpleicons.org/umami?viewbox=auto"
            ],
            [
            "title" => "Umbraco",
            "slug" => "umbraco",
            "url" => "https://cdn.simpleicons.org/umbraco?viewbox=auto"
            ],
            [
            "title" => "UML",
            "slug" => "uml",
            "url" => "https://cdn.simpleicons.org/uml?viewbox=auto"
            ],
            [
            "title" => "Unacademy",
            "slug" => "unacademy",
            "url" => "https://cdn.simpleicons.org/unacademy?viewbox=auto"
            ],
            [
            "title" => "Under Armour",
            "slug" => "underarmour",
            "url" => "https://cdn.simpleicons.org/underarmour?viewbox=auto"
            ],
            [
            "title" => "Underscore.js",
            "slug" => "underscoredotjs",
            "url" => "https://cdn.simpleicons.org/underscoredotjs?viewbox=auto"
            ],
            [
            "title" => "Undertale",
            "slug" => "undertale",
            "url" => "https://cdn.simpleicons.org/undertale?viewbox=auto"
            ],
            [
            "title" => "Unicode",
            "slug" => "unicode",
            "url" => "https://cdn.simpleicons.org/unicode?viewbox=auto"
            ],
            [
            "title" => "Unilever",
            "slug" => "unilever",
            "url" => "https://cdn.simpleicons.org/unilever?viewbox=auto"
            ],
            [
            "title" => "Uniqlo",
            "slug" => "uniqlo",
            "url" => "https://cdn.simpleicons.org/uniqlo?viewbox=auto"
            ],
            [
            "title" => "Uniqlo",
            "slug" => "uniqlo",
            "url" => "https://cdn.simpleicons.org/uniqlo?viewbox=auto"
            ],
            [
            "title" => "United Airlines",
            "slug" => "unitedairlines",
            "url" => "https://cdn.simpleicons.org/unitedairlines?viewbox=auto"
            ],
            [
            "title" => "United Nations",
            "slug" => "unitednations",
            "url" => "https://cdn.simpleicons.org/unitednations?viewbox=auto"
            ],
            [
            "title" => "Unity",
            "slug" => "unity",
            "url" => "https://cdn.simpleicons.org/unity?viewbox=auto"
            ],
            [
            "title" => "Unlicense",
            "slug" => "unlicense",
            "url" => "https://cdn.simpleicons.org/unlicense?viewbox=auto"
            ],
            [
            "title" => "UnoCSS",
            "slug" => "unocss",
            "url" => "https://cdn.simpleicons.org/unocss?viewbox=auto"
            ],
            [
            "title" => "unpkg",
            "slug" => "unpkg",
            "url" => "https://cdn.simpleicons.org/unpkg?viewbox=auto"
            ],
            [
            "title" => "Unraid",
            "slug" => "unraid",
            "url" => "https://cdn.simpleicons.org/unraid?viewbox=auto"
            ],
            [
            "title" => "Unreal Engine",
            "slug" => "unrealengine",
            "url" => "https://cdn.simpleicons.org/unrealengine?viewbox=auto"
            ],
            [
            "title" => "Unsplash",
            "slug" => "unsplash",
            "url" => "https://cdn.simpleicons.org/unsplash?viewbox=auto"
            ],
            [
            "title" => "Untappd",
            "slug" => "untappd",
            "url" => "https://cdn.simpleicons.org/untappd?viewbox=auto"
            ],
            [
            "title" => "UpCloud",
            "slug" => "upcloud",
            "url" => "https://cdn.simpleicons.org/upcloud?viewbox=auto"
            ],
            [
            "title" => "Uphold",
            "slug" => "uphold",
            "url" => "https://cdn.simpleicons.org/uphold?viewbox=auto"
            ],
            [
            "title" => "UpLabs",
            "slug" => "uplabs",
            "url" => "https://cdn.simpleicons.org/uplabs?viewbox=auto"
            ],
            [
            "title" => "Upptime",
            "slug" => "upptime",
            "url" => "https://cdn.simpleicons.org/upptime?viewbox=auto"
            ],
            [
            "title" => "UPS",
            "slug" => "ups",
            "url" => "https://cdn.simpleicons.org/ups?viewbox=auto"
            ],
            [
            "title" => "Upstash",
            "slug" => "upstash",
            "url" => "https://cdn.simpleicons.org/upstash?viewbox=auto"
            ],
            [
            "title" => "Uptime Kuma",
            "slug" => "uptimekuma",
            "url" => "https://cdn.simpleicons.org/uptimekuma?viewbox=auto"
            ],
            [
            "title" => "Uptobox",
            "slug" => "uptobox",
            "url" => "https://cdn.simpleicons.org/uptobox?viewbox=auto"
            ],
            [
            "title" => "Upwork",
            "slug" => "upwork",
            "url" => "https://cdn.simpleicons.org/upwork?viewbox=auto"
            ],
            [
            "title" => "USPS",
            "slug" => "usps",
            "url" => "https://cdn.simpleicons.org/usps?viewbox=auto"
            ],
            [
            "title" => "uTorrent",
            "slug" => "utorrent",
            "url" => "https://cdn.simpleicons.org/utorrent?viewbox=auto"
            ],
            [
            "title" => "V",
            "slug" => "v",
            "url" => "https://cdn.simpleicons.org/v?viewbox=auto"
            ],
            [
            "title" => "V2EX",
            "slug" => "v2ex",
            "url" => "https://cdn.simpleicons.org/v2ex?viewbox=auto"
            ],
            [
            "title" => "V8",
            "slug" => "v8",
            "url" => "https://cdn.simpleicons.org/v8?viewbox=auto"
            ],
            [
            "title" => "Vaadin",
            "slug" => "vaadin",
            "url" => "https://cdn.simpleicons.org/vaadin?viewbox=auto"
            ],
            [
            "title" => "Vagrant",
            "slug" => "vagrant",
            "url" => "https://cdn.simpleicons.org/vagrant?viewbox=auto"
            ],
            [
            "title" => "Vala",
            "slug" => "vala",
            "url" => "https://cdn.simpleicons.org/vala?viewbox=auto"
            ],
            [
            "title" => "Valorant",
            "slug" => "valorant",
            "url" => "https://cdn.simpleicons.org/valorant?viewbox=auto"
            ],
            [
            "title" => "Valve",
            "slug" => "valve",
            "url" => "https://cdn.simpleicons.org/valve?viewbox=auto"
            ],
            [
            "title" => "Vapor",
            "slug" => "vapor",
            "url" => "https://cdn.simpleicons.org/vapor?viewbox=auto"
            ],
            [
            "title" => "Vault",
            "slug" => "vault",
            "url" => "https://cdn.simpleicons.org/vault?viewbox=auto"
            ],
            [
            "title" => "Vaultwarden",
            "slug" => "vaultwarden",
            "url" => "https://cdn.simpleicons.org/vaultwarden?viewbox=auto"
            ],
            [
            "title" => "Vauxhall",
            "slug" => "vauxhall",
            "url" => "https://cdn.simpleicons.org/vauxhall?viewbox=auto"
            ],
            [
            "title" => "vBulletin",
            "slug" => "vbulletin",
            "url" => "https://cdn.simpleicons.org/vbulletin?viewbox=auto"
            ],
            [
            "title" => "Vectary",
            "slug" => "vectary",
            "url" => "https://cdn.simpleicons.org/vectary?viewbox=auto"
            ],
            [
            "title" => "Vector Logo Zone",
            "slug" => "vectorlogozone",
            "url" => "https://cdn.simpleicons.org/vectorlogozone?viewbox=auto"
            ],
            [
            "title" => "Vectorworks",
            "slug" => "vectorworks",
            "url" => "https://cdn.simpleicons.org/vectorworks?viewbox=auto"
            ],
            [
            "title" => "Veeam",
            "slug" => "veeam",
            "url" => "https://cdn.simpleicons.org/veeam?viewbox=auto"
            ],
            [
            "title" => "Veepee",
            "slug" => "veepee",
            "url" => "https://cdn.simpleicons.org/veepee?viewbox=auto"
            ],
            [
            "title" => "Vega",
            "slug" => "vega",
            "url" => "https://cdn.simpleicons.org/vega?viewbox=auto"
            ],
            [
            "title" => "VEGAS",
            "slug" => "vegas",
            "url" => "https://cdn.simpleicons.org/vegas?viewbox=auto"
            ],
            [
            "title" => "Velog",
            "slug" => "velog",
            "url" => "https://cdn.simpleicons.org/velog?viewbox=auto"
            ],
            [
            "title" => "Venmo",
            "slug" => "venmo",
            "url" => "https://cdn.simpleicons.org/venmo?viewbox=auto"
            ],
            [
            "title" => "Vercel",
            "slug" => "vercel",
            "url" => "https://cdn.simpleicons.org/vercel?viewbox=auto"
            ],
            [
            "title" => "Verdaccio",
            "slug" => "verdaccio",
            "url" => "https://cdn.simpleicons.org/verdaccio?viewbox=auto"
            ],
            [
            "title" => "Veritas",
            "slug" => "veritas",
            "url" => "https://cdn.simpleicons.org/veritas?viewbox=auto"
            ],
            [
            "title" => "Verizon",
            "slug" => "verizon",
            "url" => "https://cdn.simpleicons.org/verizon?viewbox=auto"
            ],
            [
            "title" => "Vespa",
            "slug" => "vespa",
            "url" => "https://cdn.simpleicons.org/vespa?viewbox=auto"
            ],
            [
            "title" => "VEXXHOST",
            "slug" => "vexxhost",
            "url" => "https://cdn.simpleicons.org/vexxhost?viewbox=auto"
            ],
            [
            "title" => "vFairs",
            "slug" => "vfairs",
            "url" => "https://cdn.simpleicons.org/vfairs?viewbox=auto"
            ],
            [
            "title" => "Viadeo",
            "slug" => "viadeo",
            "url" => "https://cdn.simpleicons.org/viadeo?viewbox=auto"
            ],
            [
            "title" => "Viaplay",
            "slug" => "viaplay",
            "url" => "https://cdn.simpleicons.org/viaplay?viewbox=auto"
            ],
            [
            "title" => "Viber",
            "slug" => "viber",
            "url" => "https://cdn.simpleicons.org/viber?viewbox=auto"
            ],
            [
            "title" => "Viblo",
            "slug" => "viblo",
            "url" => "https://cdn.simpleicons.org/viblo?viewbox=auto"
            ],
            [
            "title" => "VictoriaMetrics",
            "slug" => "victoriametrics",
            "url" => "https://cdn.simpleicons.org/victoriametrics?viewbox=auto"
            ],
            [
            "title" => "Victron Energy",
            "slug" => "victronenergy",
            "url" => "https://cdn.simpleicons.org/victronenergy?viewbox=auto"
            ],
            [
            "title" => "Vim",
            "slug" => "vim",
            "url" => "https://cdn.simpleicons.org/vim?viewbox=auto"
            ],
            [
            "title" => "Vimeo",
            "slug" => "vimeo",
            "url" => "https://cdn.simpleicons.org/vimeo?viewbox=auto"
            ],
            [
            "title" => "Vimeo Livestream",
            "slug" => "vimeolivestream",
            "url" => "https://cdn.simpleicons.org/vimeolivestream?viewbox=auto"
            ],
            [
            "title" => "Virgin",
            "slug" => "virgin",
            "url" => "https://cdn.simpleicons.org/virgin?viewbox=auto"
            ],
            [
            "title" => "Virgin Atlantic",
            "slug" => "virginatlantic",
            "url" => "https://cdn.simpleicons.org/virginatlantic?viewbox=auto"
            ],
            [
            "title" => "Virgin Media",
            "slug" => "virginmedia",
            "url" => "https://cdn.simpleicons.org/virginmedia?viewbox=auto"
            ],
            [
            "title" => "VirtualBox",
            "slug" => "virtualbox",
            "url" => "https://cdn.simpleicons.org/virtualbox?viewbox=auto"
            ],
            [
            "title" => "VirusTotal",
            "slug" => "virustotal",
            "url" => "https://cdn.simpleicons.org/virustotal?viewbox=auto"
            ],
            [
            "title" => "Visa",
            "slug" => "visa",
            "url" => "https://cdn.simpleicons.org/visa?viewbox=auto"
            ],
            [
            "title" => "Visual Basic",
            "slug" => "visualbasic",
            "url" => "https://cdn.simpleicons.org/visualbasic?viewbox=auto"
            ],
            [
            "title" => "Visual Studio",
            "slug" => "visualstudio",
            "url" => "https://cdn.simpleicons.org/visualstudio?viewbox=auto"
            ],
            [
            "title" => "Visual Studio App Center",
            "slug" => "visualstudioappcenter",
            "url" => "https://cdn.simpleicons.org/visualstudioappcenter?viewbox=auto"
            ],
            [
            "title" => "Visual Studio Code",
            "slug" => "visualstudiocode",
            "url" => "https://cdn.simpleicons.org/visualstudiocode?viewbox=auto"
            ],
            [
            "title" => "Vite",
            "slug" => "vite",
            "url" => "https://cdn.simpleicons.org/vite?viewbox=auto"
            ],
            [
            "title" => "VitePress",
            "slug" => "vitepress",
            "url" => "https://cdn.simpleicons.org/vitepress?viewbox=auto"
            ],
            [
            "title" => "Vitess",
            "slug" => "vitess",
            "url" => "https://cdn.simpleicons.org/vitess?viewbox=auto"
            ],
            [
            "title" => "Vitest",
            "slug" => "vitest",
            "url" => "https://cdn.simpleicons.org/vitest?viewbox=auto"
            ],
            [
            "title" => "Viva Wallet",
            "slug" => "vivawallet",
            "url" => "https://cdn.simpleicons.org/vivawallet?viewbox=auto"
            ],
            [
            "title" => "Vivaldi",
            "slug" => "vivaldi",
            "url" => "https://cdn.simpleicons.org/vivaldi?viewbox=auto"
            ],
            [
            "title" => "Vivino",
            "slug" => "vivino",
            "url" => "https://cdn.simpleicons.org/vivino?viewbox=auto"
            ],
            [
            "title" => "Vivint",
            "slug" => "vivint",
            "url" => "https://cdn.simpleicons.org/vivint?viewbox=auto"
            ],
            [
            "title" => "vivo",
            "slug" => "vivo",
            "url" => "https://cdn.simpleicons.org/vivo?viewbox=auto"
            ],
            [
            "title" => "VK",
            "slug" => "vk",
            "url" => "https://cdn.simpleicons.org/vk?viewbox=auto"
            ],
            [
            "title" => "VLC media player",
            "slug" => "vlcmediaplayer",
            "url" => "https://cdn.simpleicons.org/vlcmediaplayer?viewbox=auto"
            ],
            [
            "title" => "VMware",
            "slug" => "vmware",
            "url" => "https://cdn.simpleicons.org/vmware?viewbox=auto"
            ],
            [
            "title" => "Vodafone",
            "slug" => "vodafone",
            "url" => "https://cdn.simpleicons.org/vodafone?viewbox=auto"
            ],
            [
            "title" => "Void Linux",
            "slug" => "voidlinux",
            "url" => "https://cdn.simpleicons.org/voidlinux?viewbox=auto"
            ],
            [
            "title" => "VoIP.ms",
            "slug" => "voipdotms",
            "url" => "https://cdn.simpleicons.org/voipdotms?viewbox=auto"
            ],
            [
            "title" => "Volkswagen",
            "slug" => "volkswagen",
            "url" => "https://cdn.simpleicons.org/volkswagen?viewbox=auto"
            ],
            [
            "title" => "Volvo",
            "slug" => "volvo",
            "url" => "https://cdn.simpleicons.org/volvo?viewbox=auto"
            ],
            [
            "title" => "Vonage",
            "slug" => "vonage",
            "url" => "https://cdn.simpleicons.org/vonage?viewbox=auto"
            ],
            [
            "title" => "Voron Design",
            "slug" => "vorondesign",
            "url" => "https://cdn.simpleicons.org/vorondesign?viewbox=auto"
            ],
            [
            "title" => "Vowpal Wabbit",
            "slug" => "vowpalwabbit",
            "url" => "https://cdn.simpleicons.org/vowpalwabbit?viewbox=auto"
            ],
            [
            "title" => "VOX",
            "slug" => "vox",
            "url" => "https://cdn.simpleicons.org/vox?viewbox=auto"
            ],
            [
            "title" => "VSCO",
            "slug" => "vsco",
            "url" => "https://cdn.simpleicons.org/vsco?viewbox=auto"
            ],
            [
            "title" => "VSCodium",
            "slug" => "vscodium",
            "url" => "https://cdn.simpleicons.org/vscodium?viewbox=auto"
            ],
            [
            "title" => "VTEX",
            "slug" => "vtex",
            "url" => "https://cdn.simpleicons.org/vtex?viewbox=auto"
            ],
            [
            "title" => "Vue.js",
            "slug" => "vuedotjs",
            "url" => "https://cdn.simpleicons.org/vuedotjs?viewbox=auto"
            ],
            [
            "title" => "Vuetify",
            "slug" => "vuetify",
            "url" => "https://cdn.simpleicons.org/vuetify?viewbox=auto"
            ],
            [
            "title" => "Vulkan",
            "slug" => "vulkan",
            "url" => "https://cdn.simpleicons.org/vulkan?viewbox=auto"
            ],
            [
            "title" => "Vultr",
            "slug" => "vultr",
            "url" => "https://cdn.simpleicons.org/vultr?viewbox=auto"
            ],
            [
            "title" => "Vyond",
            "slug" => "vyond",
            "url" => "https://cdn.simpleicons.org/vyond?viewbox=auto"
            ],
            [
            "title" => "W3Schools",
            "slug" => "w3schools",
            "url" => "https://cdn.simpleicons.org/w3schools?viewbox=auto"
            ],
            [
            "title" => "Wacom",
            "slug" => "wacom",
            "url" => "https://cdn.simpleicons.org/wacom?viewbox=auto"
            ],
            [
            "title" => "Wagtail",
            "slug" => "wagtail",
            "url" => "https://cdn.simpleicons.org/wagtail?viewbox=auto"
            ],
            [
            "title" => "Wails",
            "slug" => "wails",
            "url" => "https://cdn.simpleicons.org/wails?viewbox=auto"
            ],
            [
            "title" => "WakaTime",
            "slug" => "wakatime",
            "url" => "https://cdn.simpleicons.org/wakatime?viewbox=auto"
            ],
            [
            "title" => "WALKMAN",
            "slug" => "walkman",
            "url" => "https://cdn.simpleicons.org/walkman?viewbox=auto"
            ],
            [
            "title" => "Wallabag",
            "slug" => "wallabag",
            "url" => "https://cdn.simpleicons.org/wallabag?viewbox=auto"
            ],
            [
            "title" => "WalletConnect",
            "slug" => "walletconnect",
            "url" => "https://cdn.simpleicons.org/walletconnect?viewbox=auto"
            ],
            [
            "title" => "Walmart",
            "slug" => "walmart",
            "url" => "https://cdn.simpleicons.org/walmart?viewbox=auto"
            ],
            [
            "title" => "Wantedly",
            "slug" => "wantedly",
            "url" => "https://cdn.simpleicons.org/wantedly?viewbox=auto"
            ],
            [
            "title" => "Wappalyzer",
            "slug" => "wappalyzer",
            "url" => "https://cdn.simpleicons.org/wappalyzer?viewbox=auto"
            ],
            [
            "title" => "Warner Bros.",
            "slug" => "warnerbrosdot",
            "url" => "https://cdn.simpleicons.org/warnerbrosdot?viewbox=auto"
            ],
            [
            "title" => "Warp",
            "slug" => "warp",
            "url" => "https://cdn.simpleicons.org/warp?viewbox=auto"
            ],
            [
            "title" => "Wasabi",
            "slug" => "wasabi",
            "url" => "https://cdn.simpleicons.org/wasabi?viewbox=auto"
            ],
            [
            "title" => "wasmCloud",
            "slug" => "wasmcloud",
            "url" => "https://cdn.simpleicons.org/wasmcloud?viewbox=auto"
            ],
            [
            "title" => "Wasmer",
            "slug" => "wasmer",
            "url" => "https://cdn.simpleicons.org/wasmer?viewbox=auto"
            ],
            [
            "title" => "Watchtower",
            "slug" => "watchtower",
            "url" => "https://cdn.simpleicons.org/watchtower?viewbox=auto"
            ],
            [
            "title" => "Wattpad",
            "slug" => "wattpad",
            "url" => "https://cdn.simpleicons.org/wattpad?viewbox=auto"
            ],
            [
            "title" => "Wayland",
            "slug" => "wayland",
            "url" => "https://cdn.simpleicons.org/wayland?viewbox=auto"
            ],
            [
            "title" => "Waze",
            "slug" => "waze",
            "url" => "https://cdn.simpleicons.org/waze?viewbox=auto"
            ],
            [
            "title" => "WazirX",
            "slug" => "wazirx",
            "url" => "https://cdn.simpleicons.org/wazirx?viewbox=auto"
            ],
            [
            "title" => "Wear OS",
            "slug" => "wearos",
            "url" => "https://cdn.simpleicons.org/wearos?viewbox=auto"
            ],
            [
            "title" => "Weasyl",
            "slug" => "weasyl",
            "url" => "https://cdn.simpleicons.org/weasyl?viewbox=auto"
            ],
            [
            "title" => "Web3.js",
            "slug" => "web3dotjs",
            "url" => "https://cdn.simpleicons.org/web3dotjs?viewbox=auto"
            ],
            [
            "title" => "WebAssembly",
            "slug" => "webassembly",
            "url" => "https://cdn.simpleicons.org/webassembly?viewbox=auto"
            ],
            [
            "title" => "WebAuthn",
            "slug" => "webauthn",
            "url" => "https://cdn.simpleicons.org/webauthn?viewbox=auto"
            ],
            [
            "title" => "webcomponents.org",
            "slug" => "webcomponentsdotorg",
            "url" => "https://cdn.simpleicons.org/webcomponentsdotorg?viewbox=auto"
            ],
            [
            "title" => "WebdriverIO",
            "slug" => "webdriverio",
            "url" => "https://cdn.simpleicons.org/webdriverio?viewbox=auto"
            ],
            [
            "title" => "Webex",
            "slug" => "webex",
            "url" => "https://cdn.simpleicons.org/webex?viewbox=auto"
            ],
            [
            "title" => "Webflow",
            "slug" => "webflow",
            "url" => "https://cdn.simpleicons.org/webflow?viewbox=auto"
            ],
            [
            "title" => "WebGL",
            "slug" => "webgl",
            "url" => "https://cdn.simpleicons.org/webgl?viewbox=auto"
            ],
            [
            "title" => "Weblate",
            "slug" => "weblate",
            "url" => "https://cdn.simpleicons.org/weblate?viewbox=auto"
            ],
            [
            "title" => "Webmin",
            "slug" => "webmin",
            "url" => "https://cdn.simpleicons.org/webmin?viewbox=auto"
            ],
            [
            "title" => "WebMoney",
            "slug" => "webmoney",
            "url" => "https://cdn.simpleicons.org/webmoney?viewbox=auto"
            ],
            [
            "title" => "Webpack",
            "slug" => "webpack",
            "url" => "https://cdn.simpleicons.org/webpack?viewbox=auto"
            ],
            [
            "title" => "WebRTC",
            "slug" => "webrtc",
            "url" => "https://cdn.simpleicons.org/webrtc?viewbox=auto"
            ],
            [
            "title" => "WebStorm",
            "slug" => "webstorm",
            "url" => "https://cdn.simpleicons.org/webstorm?viewbox=auto"
            ],
            [
            "title" => "WEBTOON",
            "slug" => "webtoon",
            "url" => "https://cdn.simpleicons.org/webtoon?viewbox=auto"
            ],
            [
            "title" => "webtrees",
            "slug" => "webtrees",
            "url" => "https://cdn.simpleicons.org/webtrees?viewbox=auto"
            ],
            [
            "title" => "WeChat",
            "slug" => "wechat",
            "url" => "https://cdn.simpleicons.org/wechat?viewbox=auto"
            ],
            [
            "title" => "WeGame",
            "slug" => "wegame",
            "url" => "https://cdn.simpleicons.org/wegame?viewbox=auto"
            ],
            [
            "title" => "Weights & Biases",
            "slug" => "weightsandbiases",
            "url" => "https://cdn.simpleicons.org/weightsandbiases?viewbox=auto"
            ],
            [
            "title" => "Welcome to the Jungle",
            "slug" => "welcometothejungle",
            "url" => "https://cdn.simpleicons.org/welcometothejungle?viewbox=auto"
            ],
            [
            "title" => "Wellfound",
            "slug" => "wellfound",
            "url" => "https://cdn.simpleicons.org/wellfound?viewbox=auto"
            ],
            [
            "title" => "Wells Fargo",
            "slug" => "wellsfargo",
            "url" => "https://cdn.simpleicons.org/wellsfargo?viewbox=auto"
            ],
            [
            "title" => "WEMO",
            "slug" => "wemo",
            "url" => "https://cdn.simpleicons.org/wemo?viewbox=auto"
            ],
            [
            "title" => "Western Digital",
            "slug" => "westerndigital",
            "url" => "https://cdn.simpleicons.org/westerndigital?viewbox=auto"
            ],
            [
            "title" => "Western Union",
            "slug" => "westernunion",
            "url" => "https://cdn.simpleicons.org/westernunion?viewbox=auto"
            ],
            [
            "title" => "WeTransfer",
            "slug" => "wetransfer",
            "url" => "https://cdn.simpleicons.org/wetransfer?viewbox=auto"
            ],
            [
            "title" => "WezTerm",
            "slug" => "wezterm",
            "url" => "https://cdn.simpleicons.org/wezterm?viewbox=auto"
            ],
            [
            "title" => "wgpu",
            "slug" => "wgpu",
            "url" => "https://cdn.simpleicons.org/wgpu?viewbox=auto"
            ],
            [
            "title" => "WhatsApp",
            "slug" => "whatsapp",
            "url" => "https://cdn.simpleicons.org/whatsapp?viewbox=auto"
            ],
            [
            "title" => "When I Work",
            "slug" => "wheniwork",
            "url" => "https://cdn.simpleicons.org/wheniwork?viewbox=auto"
            ],
            [
            "title" => "Wii",
            "slug" => "wii",
            "url" => "https://cdn.simpleicons.org/wii?viewbox=auto"
            ],
            [
            "title" => "Wii U",
            "slug" => "wiiu",
            "url" => "https://cdn.simpleicons.org/wiiu?viewbox=auto"
            ],
            [
            "title" => "wiki.gg",
            "slug" => "wikidotgg",
            "url" => "https://cdn.simpleicons.org/wikidotgg?viewbox=auto"
            ],
            [
            "title" => "Wiki.js",
            "slug" => "wikidotjs",
            "url" => "https://cdn.simpleicons.org/wikidotjs?viewbox=auto"
            ],
            [
            "title" => "Wikidata",
            "slug" => "wikidata",
            "url" => "https://cdn.simpleicons.org/wikidata?viewbox=auto"
            ],
            [
            "title" => "Wikimedia Commons",
            "slug" => "wikimediacommons",
            "url" => "https://cdn.simpleicons.org/wikimediacommons?viewbox=auto"
            ],
            [
            "title" => "Wikimedia Foundation",
            "slug" => "wikimediafoundation",
            "url" => "https://cdn.simpleicons.org/wikimediafoundation?viewbox=auto"
            ],
            [
            "title" => "Wikipedia",
            "slug" => "wikipedia",
            "url" => "https://cdn.simpleicons.org/wikipedia?viewbox=auto"
            ],
            [
            "title" => "Wikiquote",
            "slug" => "wikiquote",
            "url" => "https://cdn.simpleicons.org/wikiquote?viewbox=auto"
            ],
            [
            "title" => "Wikivoyage",
            "slug" => "wikivoyage",
            "url" => "https://cdn.simpleicons.org/wikivoyage?viewbox=auto"
            ],
            [
            "title" => "Winamp",
            "slug" => "winamp",
            "url" => "https://cdn.simpleicons.org/winamp?viewbox=auto"
            ],
            [
            "title" => "Windows",
            "slug" => "windows",
            "url" => "https://cdn.simpleicons.org/windows?viewbox=auto"
            ],
            [
            "title" => "Windows 10",
            "slug" => "windows10",
            "url" => "https://cdn.simpleicons.org/windows10?viewbox=auto"
            ],
            [
            "title" => "Windows 11",
            "slug" => "windows11",
            "url" => "https://cdn.simpleicons.org/windows11?viewbox=auto"
            ],
            [
            "title" => "Windows 95",
            "slug" => "windows95",
            "url" => "https://cdn.simpleicons.org/windows95?viewbox=auto"
            ],
            [
            "title" => "Windows Terminal",
            "slug" => "windowsterminal",
            "url" => "https://cdn.simpleicons.org/windowsterminal?viewbox=auto"
            ],
            [
            "title" => "Windows XP",
            "slug" => "windowsxp",
            "url" => "https://cdn.simpleicons.org/windowsxp?viewbox=auto"
            ],
            [
            "title" => "Wipro",
            "slug" => "wipro",
            "url" => "https://cdn.simpleicons.org/wipro?viewbox=auto"
            ],
            [
            "title" => "Wire",
            "slug" => "wire",
            "url" => "https://cdn.simpleicons.org/wire?viewbox=auto"
            ],
            [
            "title" => "WireGuard",
            "slug" => "wireguard",
            "url" => "https://cdn.simpleicons.org/wireguard?viewbox=auto"
            ],
            [
            "title" => "Wireshark",
            "slug" => "wireshark",
            "url" => "https://cdn.simpleicons.org/wireshark?viewbox=auto"
            ],
            [
            "title" => "Wise",
            "slug" => "wise",
            "url" => "https://cdn.simpleicons.org/wise?viewbox=auto"
            ],
            [
            "title" => "Wish",
            "slug" => "wish",
            "url" => "https://cdn.simpleicons.org/wish?viewbox=auto"
            ],
            [
            "title" => "Wistia",
            "slug" => "wistia",
            "url" => "https://cdn.simpleicons.org/wistia?viewbox=auto"
            ],
            [
            "title" => "Wix",
            "slug" => "wix",
            "url" => "https://cdn.simpleicons.org/wix?viewbox=auto"
            ],
            [
            "title" => "Wizz Air",
            "slug" => "wizzair",
            "url" => "https://cdn.simpleicons.org/wizzair?viewbox=auto"
            ],
            [
            "title" => "Wolfram",
            "slug" => "wolfram",
            "url" => "https://cdn.simpleicons.org/wolfram?viewbox=auto"
            ],
            [
            "title" => "Wolfram Language",
            "slug" => "wolframlanguage",
            "url" => "https://cdn.simpleicons.org/wolframlanguage?viewbox=auto"
            ],
            [
            "title" => "Wolfram Mathematica",
            "slug" => "wolframmathematica",
            "url" => "https://cdn.simpleicons.org/wolframmathematica?viewbox=auto"
            ],
            [
            "title" => "Wondershare",
            "slug" => "wondershare",
            "url" => "https://cdn.simpleicons.org/wondershare?viewbox=auto"
            ],
            [
            "title" => "Wondershare Filmora",
            "slug" => "wondersharefilmora",
            "url" => "https://cdn.simpleicons.org/wondersharefilmora?viewbox=auto"
            ],
            [
            "title" => "Woo",
            "slug" => "woo",
            "url" => "https://cdn.simpleicons.org/woo?viewbox=auto"
            ],
            [
            "title" => "WooCommerce",
            "slug" => "woocommerce",
            "url" => "https://cdn.simpleicons.org/woocommerce?viewbox=auto"
            ],
            [
            "title" => "WordPress",
            "slug" => "wordpress",
            "url" => "https://cdn.simpleicons.org/wordpress?viewbox=auto"
            ],
            [
            "title" => "Workplace",
            "slug" => "workplace",
            "url" => "https://cdn.simpleicons.org/workplace?viewbox=auto"
            ],
            [
            "title" => "World Health Organization",
            "slug" => "worldhealthorganization",
            "url" => "https://cdn.simpleicons.org/worldhealthorganization?viewbox=auto"
            ],
            [
            "title" => "WP Engine",
            "slug" => "wpengine",
            "url" => "https://cdn.simpleicons.org/wpengine?viewbox=auto"
            ],
            [
            "title" => "WP Rocket",
            "slug" => "wprocket",
            "url" => "https://cdn.simpleicons.org/wprocket?viewbox=auto"
            ],
            [
            "title" => "WPExplorer",
            "slug" => "wpexplorer",
            "url" => "https://cdn.simpleicons.org/wpexplorer?viewbox=auto"
            ],
            [
            "title" => "Write.as",
            "slug" => "writedotas",
            "url" => "https://cdn.simpleicons.org/writedotas?viewbox=auto"
            ],
            [
            "title" => "WWE",
            "slug" => "wwe",
            "url" => "https://cdn.simpleicons.org/wwe?viewbox=auto"
            ],
            [
            "title" => "Wwise",
            "slug" => "wwise",
            "url" => "https://cdn.simpleicons.org/wwise?viewbox=auto"
            ],
            [
            "title" => "Wyze",
            "slug" => "wyze",
            "url" => "https://cdn.simpleicons.org/wyze?viewbox=auto"
            ],
            [
            "title" => "X",
            "slug" => "x",
            "url" => "https://cdn.simpleicons.org/x?viewbox=auto"
            ],
            [
            "title" => "X.Org",
            "slug" => "xdotorg",
            "url" => "https://cdn.simpleicons.org/xdotorg?viewbox=auto"
            ],
            [
            "title" => "Xamarin",
            "slug" => "xamarin",
            "url" => "https://cdn.simpleicons.org/xamarin?viewbox=auto"
            ],
            [
            "title" => "XAML",
            "slug" => "xaml",
            "url" => "https://cdn.simpleicons.org/xaml?viewbox=auto"
            ],
            [
            "title" => "XAMPP",
            "slug" => "xampp",
            "url" => "https://cdn.simpleicons.org/xampp?viewbox=auto"
            ],
            [
            "title" => "Xbox",
            "slug" => "xbox",
            "url" => "https://cdn.simpleicons.org/xbox?viewbox=auto"
            ],
            [
            "title" => "Xcode",
            "slug" => "xcode",
            "url" => "https://cdn.simpleicons.org/xcode?viewbox=auto"
            ],
            [
            "title" => "XDA Developers",
            "slug" => "xdadevelopers",
            "url" => "https://cdn.simpleicons.org/xdadevelopers?viewbox=auto"
            ],
            [
            "title" => "Xendit",
            "slug" => "xendit",
            "url" => "https://cdn.simpleicons.org/xendit?viewbox=auto"
            ],
            [
            "title" => "Xero",
            "slug" => "xero",
            "url" => "https://cdn.simpleicons.org/xero?viewbox=auto"
            ],
            [
            "title" => "XFCE",
            "slug" => "xfce",
            "url" => "https://cdn.simpleicons.org/xfce?viewbox=auto"
            ],
            [
            "title" => "Xiaohongshu",
            "slug" => "xiaohongshu",
            "url" => "https://cdn.simpleicons.org/xiaohongshu?viewbox=auto"
            ],
            [
            "title" => "Xiaomi",
            "slug" => "xiaomi",
            "url" => "https://cdn.simpleicons.org/xiaomi?viewbox=auto"
            ],
            [
            "title" => "Xing",
            "slug" => "xing",
            "url" => "https://cdn.simpleicons.org/xing?viewbox=auto"
            ],
            [
            "title" => "XMPP",
            "slug" => "xmpp",
            "url" => "https://cdn.simpleicons.org/xmpp?viewbox=auto"
            ],
            [
            "title" => "XO",
            "slug" => "xo",
            "url" => "https://cdn.simpleicons.org/xo?viewbox=auto"
            ],
            [
            "title" => "XRP",
            "slug" => "xrp",
            "url" => "https://cdn.simpleicons.org/xrp?viewbox=auto"
            ],
            [
            "title" => "XSplit",
            "slug" => "xsplit",
            "url" => "https://cdn.simpleicons.org/xsplit?viewbox=auto"
            ],
            [
            "title" => "XState",
            "slug" => "xstate",
            "url" => "https://cdn.simpleicons.org/xstate?viewbox=auto"
            ],
            [
            "title" => "Y Combinator",
            "slug" => "ycombinator",
            "url" => "https://cdn.simpleicons.org/ycombinator?viewbox=auto"
            ],
            [
            "title" => "Yale",
            "slug" => "yale",
            "url" => "https://cdn.simpleicons.org/yale?viewbox=auto"
            ],
            [
            "title" => "Yamaha Corporation",
            "slug" => "yamahacorporation",
            "url" => "https://cdn.simpleicons.org/yamahacorporation?viewbox=auto"
            ],
            [
            "title" => "Yamaha Motor Corporation",
            "slug" => "yamahamotorcorporation",
            "url" => "https://cdn.simpleicons.org/yamahamotorcorporation?viewbox=auto"
            ],
            [
            "title" => "YAML",
            "slug" => "yaml",
            "url" => "https://cdn.simpleicons.org/yaml?viewbox=auto"
            ],
            [
            "title" => "Yammer",
            "slug" => "yammer",
            "url" => "https://cdn.simpleicons.org/yammer?viewbox=auto"
            ],
            [
            "title" => "Yandex Cloud",
            "slug" => "yandexcloud",
            "url" => "https://cdn.simpleicons.org/yandexcloud?viewbox=auto"
            ],
            [
            "title" => "Yarn",
            "slug" => "yarn",
            "url" => "https://cdn.simpleicons.org/yarn?viewbox=auto"
            ],
            [
            "title" => "Yelp",
            "slug" => "yelp",
            "url" => "https://cdn.simpleicons.org/yelp?viewbox=auto"
            ],
            [
            "title" => "Yeti",
            "slug" => "yeti",
            "url" => "https://cdn.simpleicons.org/yeti?viewbox=auto"
            ],
            [
            "title" => "Yoast",
            "slug" => "yoast",
            "url" => "https://cdn.simpleicons.org/yoast?viewbox=auto"
            ],
            [
            "title" => "YouTube",
            "slug" => "youtube",
            "url" => "https://cdn.simpleicons.org/youtube?viewbox=auto"
            ],
            [
            "title" => "YouTube Gaming",
            "slug" => "youtubegaming",
            "url" => "https://cdn.simpleicons.org/youtubegaming?viewbox=auto"
            ],
            [
            "title" => "YouTube Kids",
            "slug" => "youtubekids",
            "url" => "https://cdn.simpleicons.org/youtubekids?viewbox=auto"
            ],
            [
            "title" => "YouTube Music",
            "slug" => "youtubemusic",
            "url" => "https://cdn.simpleicons.org/youtubemusic?viewbox=auto"
            ],
            [
            "title" => "YouTube Shorts",
            "slug" => "youtubeshorts",
            "url" => "https://cdn.simpleicons.org/youtubeshorts?viewbox=auto"
            ],
            [
            "title" => "YouTube Studio",
            "slug" => "youtubestudio",
            "url" => "https://cdn.simpleicons.org/youtubestudio?viewbox=auto"
            ],
            [
            "title" => "YouTube TV",
            "slug" => "youtubetv",
            "url" => "https://cdn.simpleicons.org/youtubetv?viewbox=auto"
            ],
            [
            "title" => "Yr",
            "slug" => "yr",
            "url" => "https://cdn.simpleicons.org/yr?viewbox=auto"
            ],
            [
            "title" => "Yubico",
            "slug" => "yubico",
            "url" => "https://cdn.simpleicons.org/yubico?viewbox=auto"
            ],
            [
            "title" => "Żabka",
            "slug" => "zabka",
            "url" => "https://cdn.simpleicons.org/zabka?viewbox=auto"
            ],
            [
            "title" => "Zaim",
            "slug" => "zaim",
            "url" => "https://cdn.simpleicons.org/zaim?viewbox=auto"
            ],
            [
            "title" => "Zalando",
            "slug" => "zalando",
            "url" => "https://cdn.simpleicons.org/zalando?viewbox=auto"
            ],
            [
            "title" => "Zalo",
            "slug" => "zalo",
            "url" => "https://cdn.simpleicons.org/zalo?viewbox=auto"
            ],
            [
            "title" => "ZAP",
            "slug" => "zap",
            "url" => "https://cdn.simpleicons.org/zap?viewbox=auto"
            ],
            [
            "title" => "Zapier",
            "slug" => "zapier",
            "url" => "https://cdn.simpleicons.org/zapier?viewbox=auto"
            ],
            [
            "title" => "Zara",
            "slug" => "zara",
            "url" => "https://cdn.simpleicons.org/zara?viewbox=auto"
            ],
            [
            "title" => "Zazzle",
            "slug" => "zazzle",
            "url" => "https://cdn.simpleicons.org/zazzle?viewbox=auto"
            ],
            [
            "title" => "Zcash",
            "slug" => "zcash",
            "url" => "https://cdn.simpleicons.org/zcash?viewbox=auto"
            ],
            [
            "title" => "ZCOOL",
            "slug" => "zcool",
            "url" => "https://cdn.simpleicons.org/zcool?viewbox=auto"
            ],
            [
            "title" => "ZDF",
            "slug" => "zdf",
            "url" => "https://cdn.simpleicons.org/zdf?viewbox=auto"
            ],
            [
            "title" => "ZebPay",
            "slug" => "zebpay",
            "url" => "https://cdn.simpleicons.org/zebpay?viewbox=auto"
            ],
            [
            "title" => "Zebra Technologies",
            "slug" => "zebratechnologies",
            "url" => "https://cdn.simpleicons.org/zebratechnologies?viewbox=auto"
            ],
            [
            "title" => "Zed Industries",
            "slug" => "zedindustries",
            "url" => "https://cdn.simpleicons.org/zedindustries?viewbox=auto"
            ],
            [
            "title" => "Zelle",
            "slug" => "zelle",
            "url" => "https://cdn.simpleicons.org/zelle?viewbox=auto"
            ],
            [
            "title" => "Zend",
            "slug" => "zend",
            "url" => "https://cdn.simpleicons.org/zend?viewbox=auto"
            ],
            [
            "title" => "Zendesk",
            "slug" => "zendesk",
            "url" => "https://cdn.simpleicons.org/zendesk?viewbox=auto"
            ],
            [
            "title" => "Zenn",
            "slug" => "zenn",
            "url" => "https://cdn.simpleicons.org/zenn?viewbox=auto"
            ],
            [
            "title" => "Zenodo",
            "slug" => "zenodo",
            "url" => "https://cdn.simpleicons.org/zenodo?viewbox=auto"
            ],
            [
            "title" => "Zensar",
            "slug" => "zensar",
            "url" => "https://cdn.simpleicons.org/zensar?viewbox=auto"
            ],
            [
            "title" => "Zerodha",
            "slug" => "zerodha",
            "url" => "https://cdn.simpleicons.org/zerodha?viewbox=auto"
            ],
            [
            "title" => "Zerply",
            "slug" => "zerply",
            "url" => "https://cdn.simpleicons.org/zerply?viewbox=auto"
            ],
            [
            "title" => "Zettlr",
            "slug" => "zettlr",
            "url" => "https://cdn.simpleicons.org/zettlr?viewbox=auto"
            ],
            [
            "title" => "Zhihu",
            "slug" => "zhihu",
            "url" => "https://cdn.simpleicons.org/zhihu?viewbox=auto"
            ],
            [
            "title" => "Zig",
            "slug" => "zig",
            "url" => "https://cdn.simpleicons.org/zig?viewbox=auto"
            ],
            [
            "title" => "Zigbee",
            "slug" => "zigbee",
            "url" => "https://cdn.simpleicons.org/zigbee?viewbox=auto"
            ],
            [
            "title" => "Zigbee2MQTT",
            "slug" => "zigbee2mqtt",
            "url" => "https://cdn.simpleicons.org/zigbee2mqtt?viewbox=auto"
            ],
            [
            "title" => "Ziggo",
            "slug" => "ziggo",
            "url" => "https://cdn.simpleicons.org/ziggo?viewbox=auto"
            ],
            [
            "title" => "Zilch",
            "slug" => "zilch",
            "url" => "https://cdn.simpleicons.org/zilch?viewbox=auto"
            ],
            [
            "title" => "Zillow",
            "slug" => "zillow",
            "url" => "https://cdn.simpleicons.org/zillow?viewbox=auto"
            ],
            [
            "title" => "ZincSearch",
            "slug" => "zincsearch",
            "url" => "https://cdn.simpleicons.org/zincsearch?viewbox=auto"
            ],
            [
            "title" => "Zingat",
            "slug" => "zingat",
            "url" => "https://cdn.simpleicons.org/zingat?viewbox=auto"
            ],
            [
            "title" => "Zod",
            "slug" => "zod",
            "url" => "https://cdn.simpleicons.org/zod?viewbox=auto"
            ],
            [
            "title" => "Zoho",
            "slug" => "zoho",
            "url" => "https://cdn.simpleicons.org/zoho?viewbox=auto"
            ],
            [
            "title" => "Zoiper",
            "slug" => "zoiper",
            "url" => "https://cdn.simpleicons.org/zoiper?viewbox=auto"
            ],
            [
            "title" => "Zomato",
            "slug" => "zomato",
            "url" => "https://cdn.simpleicons.org/zomato?viewbox=auto"
            ],
            [
            "title" => "Zoom",
            "slug" => "zoom",
            "url" => "https://cdn.simpleicons.org/zoom?viewbox=auto"
            ],
            [
            "title" => "Zorin",
            "slug" => "zorin",
            "url" => "https://cdn.simpleicons.org/zorin?viewbox=auto"
            ],
            [
            "title" => "Zotero",
            "slug" => "zotero",
            "url" => "https://cdn.simpleicons.org/zotero?viewbox=auto"
            ],
            [
            "title" => "Zsh",
            "slug" => "zsh",
            "url" => "https://cdn.simpleicons.org/zsh?viewbox=auto"
            ],
            [
            "title" => "Zulip",
            "slug" => "zulip",
            "url" => "https://cdn.simpleicons.org/zulip?viewbox=auto"
            ],
            [
            "title" => "Zyte",
            "slug" => "zyte",
            "url" => "https://cdn.simpleicons.org/zyte?viewbox=auto"
            ]
            ];
        DB::table('icons')->insert($icons);
    }
}
