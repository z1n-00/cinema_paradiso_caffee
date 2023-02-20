
//For Admin Panel
    function toggleMenu(){
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");
        toggle.classList.toggle('active');
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }

    // For Add Menu Image 
    // function triggerClick(){
    //     document.querySelector('#image').click();
    // }
    
    // function displayImage(e){
    //     if(e.files[0]){
    //         let reader = new FileReader();
    
    //         reader.onload = function(e){
    //             document.querySelector("#menu_image").setAttribute('src', e.target.result);
    //         }
    //         reader.readAsDataURL(e.files[0]);
    //     }
    // }