if (typeof window !== 'undefined') {

    const activePage = window.location.pathname;

    //const activePath = 'file://'+activePage; // use for normal file travel
    const activePath = 'http://localhost'+activePage; // use for local host path travel
     //console.log(activePath);

     let ap = activePath;

     const nodelist = document.querySelectorAll('a').forEach(link =>{
       
        //console.log(link.href);
        
     let pp = link.href;
     
     let result = ap.localeCompare(pp);
     // console.log(result);
        

        if(result === 0) {

           link.classList.add('active');
        }else{
            //console.log("false");
        }
        
     })
}
 



