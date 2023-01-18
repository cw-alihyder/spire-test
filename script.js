
$('#uspsForm').submit(function (e) { 
    e.preventDefault();

    let formData = getFormData($(this))

    localStorage.setItem('location', JSON.stringify(formData))

    addressFormat('original')

    $('#formatModal').modal('show')
});

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}


function addressFormat(addressFormat)
{
    let location = JSON.parse(localStorage.getItem('location'))
    $('.address-format-group').find('button').removeClass('active btn-primary')
    $('.'+addressFormat).addClass('active btn-primary')

    let html = ''
    html += 'Address Line 1: '

    if(addressFormat === 'original') html += location.address_line_1
    else html += location.address_line_2

    html += '<br>'

    html += 'Address Line 2: '
    if(addressFormat === 'original') html += location.address_line_2
    else html += location.address_line_1

    console.log(html)

    html += '<br>';


    html += 'city: '+location.city+'<br>'
    html += 'state: '+location.state+'<br>'
    html += 'zipcode: '+location.zipcode+'<br>'

    localStorage.setItem('location', JSON.stringify({...location, address_format: addressFormat}))

    $('.addressFormatCard').html(html);
}


$('.save-location').click(function (e) { 
    e.preventDefault();

    let location = JSON.parse(localStorage.getItem('location'))

    $.ajax({
        type: "POST",
        url: "crud.php",
        data: location,
        dataType: "json",
        success: function (response) {
            $('.success_message').html(response.message)
            $('.success_message').removeClass('d-none')
        }
    });
});