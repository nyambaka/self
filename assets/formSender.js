var form = (function name() {

    function send() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var details = document.getElementById('details').value;
        fetch(
                "http://localhost/self/request",
                {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({"name": name, "email": email, "details": details})
                }
        ).then((data)=>{
            return data.json();
        }).then(
               (res)=>{
                   document.getElementById('success').innerHTML="done with all success";  
               });
       
        return false;
    }

    function result(elemName) {

    }

    function add_to_dome(json_response) {

    }

    return {
        auto: send
    };




}
)();
