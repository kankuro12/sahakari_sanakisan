const image_upload_handler_callback = (blobInfo, success, failure) => {
    const formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    axios.post("{{ route('admin.upload') }}", formData)
        .then((res) => {
            success(res.data);
        }).catch((err) => {
            failure(err);

        });
};

function myFileBrowser(field_name, url, type, win) {

    // alert("Field_Name: " + field_name + "nURL: " + url + "nType: " + type + "nWin: " + win); // debug/testing

    /* If you work with sessions in PHP and your client doesn't accept cookies you might need to carry
       the session name and session ID in the request string (can look like this: "?PHPSESSID=88p0n70s9dsknra96qhuk6etm5").
       These lines of code extract the necessary parameters and add them back to the filebrowser URL again. */

    var cmsURL = window.location.toString(); // script URL - use an absolute path!
    if (cmsURL.indexOf("?") < 0) {
        //add the type as the only query parameter
        cmsURL = cmsURL + "?type=" + type;
    } else {
        //add the type as an additional query parameter
        // (PHP session ID is now included if there is one at all)
        cmsURL = cmsURL + "&type=" + type;
    }

    tinyMCE.activeEditor.windowManager.open({
        file: cmsURL,
        title: 'My File Browser',
        width: 420, // Your dimensions may differ - toy around with them!
        height: 400,
        resizable: "yes",
        inline: "yes", // This parameter only has an effect if you use the inlinepopups plugin!
        close_previous: "no"
    }, {
        window: win,
        input: field_name
    });
    return false;
}
