
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('insert-img-btn').addEventListener('click',function(){
        document.getElementById('imagesInput').click();
    })
    document.getElementById('imagesInput').addEventListener('change', function (e) {
        var file = e.target.files[0];
        console.log(file)
        
        if (file) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
            };
    
            reader.readAsDataURL(file);
        }
    });
});
