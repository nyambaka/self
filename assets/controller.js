var custom = (function () {

    var base = "http://localhost/self";
    var route = "/refine";
    var assets;
    var text;
    var promises = [];

    function initialize(url) {

    }

    function get_document(url,save_to) {
        promises.append(save_to,false);
        return fetch(url, {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json',
            },
            redirect: 'follow',
            referrer: 'no-referrer',
        }).then((res) => {
            return res.json();
        })
            .then((data) => {
                template = data;
            }).finally(
                promises.append(save_to,true)
            );
    }

    function fetch_template() {
        return fetch(base + "/view/temp.html")
            .then((res) => {
                return res.text();
            })
            .then((data) => {
                document.write(data);
            }).finally(
                
        );
    }

    function fetch_text() {
        text = get_document(base + route + "/text",text);
    }

    function fetch_assets() {
        assets = get_document(base + route + "/assets",assets);
    }

    function getElement(id, value) {
        template.getElementById(id).innerText = value;
    }

    function automate() {
        fetch_template();
        fetch_assets();
        fetch_text();
        console.log(promises);
    }
    
    return {
        auto: automate,
        get_doc: get_document

    };
    
})();

var n = custom.auto;
n();



function isactive(){
    
    var display_happened= true;
    
    
    function show(){
        if (display_happened){
            return true;
        }
        return false;
    }
    
    function  set_display_happened(true_or_false){
        display_happened = true_or_false;
    }
    
    function show_text(){
        for(let i=0; i<text.length; i++){
            
        }
    }
    
    function show_template(){
        
    }
    
    function show_assets(){
        
    }
    
}


let test= isactive;
console.log(test.show());
test.set_display_happened(false);
console.log(test.show());
console.log(test.show());