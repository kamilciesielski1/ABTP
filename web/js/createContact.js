$(document).ready(function(){
    var $collectionHolder;
    var $addTagLink = $('<a href="#" class="add_tag_link">Add a tag</a>');
    var $newLinkLi = $('<li></li>').append($addTagLink);

    $collectionHolder = $('ul.tags');
    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addTagLink.on('click', function(e) {
        e.preventDefault();
        addTagForm($collectionHolder, $newLinkLi);
    });

    function addTagForm($collectionHolder, $newLinkLi) {
        var prototype = $collectionHolder.data('prototype');
        // get the new index
        var index = $collectionHolder.data('index');
        if ( index > 2 ) {
            return;
        }
        var newForm = prototype;
        newForm = newForm.replace(/__name__/g, index);
        // increase the index with one for the next item
        $collectionHolder.data('index', index + 1);
        // Display the form in the page in an li, before the "Add a tag" link li
        var $newFormLi = $('<li></li>').append(newForm);
        $newLinkLi.before($newFormLi);
        addTagFormDeleteLink($collectionHolder, $newFormLi);
    }

    function addTagFormDeleteLink($collectionHolder, $tagFormLi) {
        var $removeFormA = $('<a href="#">delete this tag</a>');
        $tagFormLi.append($removeFormA);
        $removeFormA.on('click', function (e) {
            // prevent the link from creating a "#" on the URL
            e.preventDefault();
            // remove the li for the tag form
            $tagFormLi.remove();
            var index = $collectionHolder.data('index');
            $collectionHolder.data('index', index - 1);
        });
    }
});