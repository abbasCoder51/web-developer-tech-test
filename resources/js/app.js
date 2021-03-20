require('./bootstrap');

$.ajax({
    url: "/social-feed.json"
}).done(function(data) {
    var twitterFeedContainer = $("#twitter-feed-container");
    data["data"].forEach(function(item) {
        var twitterFeedItemTemplate = $("#twitter-feed-item-template").clone().removeAttr("id");
        twitterFeedItemTemplate.find(".twitter-image-item").find("img").attr("src", item["icon"]);
        twitterFeedItemTemplate.find(".twitter-name-item").html(item["name"]);
        twitterFeedItemTemplate.find(".twitter-tag-name-item").html(item["tag_name"]);
        twitterFeedItemTemplate.find(".twitter-date-item").html(item["date"]);
        twitterFeedItemTemplate.find(".twitter-description-item").html(item["description"]);
        twitterFeedContainer.append(twitterFeedItemTemplate);
    });
});
