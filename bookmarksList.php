<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid #ccc;
            margin: auto;
            margin-top: 30px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            text-align: left;
            padding: 10px;
            height: 20px;
        }

        .favicon {
            width: 28px;
        }

        #main {
            width: 50%;
            min-width: 360px;
            margin: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="main">
        <?php
        include "php/HtmlHelpers.php";
        include "php/Bookmarks.php";

        function addFaviconsAndLinks($bookmarks)
        {
            foreach ($bookmarks as &$bookmark) {
                unset($bookmark["Id"]);
                $url = $bookmark['Url'];
                $favicon = HtmlHelper::SiteFavicon($url);
                $faviconLink = HtmlHelper::Link($url, $favicon, true);
                $urlLink = HtmlHelper::Link($url, $url, true);
                $bookmark['Url'] = $urlLink;
                array_unshift($bookmark, $faviconLink);
               
            }
            return $bookmarks;
        }

        $columnTitles = ["Favicon", "Site", "Url", "Catégorie"];
        $bookmarks = (Bookmark::ReadFile("data/bookmarks.json"));

        echo HtmlHelper::Table(addFaviconsAndLinks($bookmarks), "Favoris", $columnTitles);
        ?>

    </div>
</body>

</html>