$(document).ready(function()
{
    $('#deleteAllButton').click(function()
    {
        $(this).text(v.deletingTip);
        $.getJSON($(this).attr('href'), function(response)
        {
            if(response.result == 'success')
            {
                $("#deleteAllButton").text(v.deletedTip);
                location.href=response.locate;
            }
            else
            {
                $("#deleteAllButton").text(v.failDeleteTip);
            }
        }); 
        return false;
    });
})
