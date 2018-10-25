var http = require('http');
var url = require('url');

http.createServer(function (req, res) {
    var path = url.parse(req.url).pathname;
    urlRoute(path, req, res);
    res.end();

}).listen(8080);

function urlRoute(path, req, res) {
    console.log(path)
    switch(path) {
        case '/':
            res.writeHead(200, {"Content-Type": "text/plain"});
            res.write("In index!");
            break;
        case '/info':
            res.writeHead(200, {"Content-Type": "text/plain"});
            res.write("In info!");
            break;
    default: // Default code IS working
            console.log("404");
            res.writeHead(404, {"Content-Type": "text/plain"});
            res.write("Default 404"); 
    }
}
