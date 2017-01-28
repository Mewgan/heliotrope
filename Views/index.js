var template = `
    <style>
        body {
            padding-top: 50px;
        }

        .heading {
            padding: 40px 15px;
            text-align: center;
        }
    </style>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" v-link="{name : 'home'}">Aster</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a v-link="{name : 'home'}">Accueil</a></li>
                    <li><a v-link="{name : 'module:post.type:static.action:all'}">Articles</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <div class="heading">
            <h1>${ _data.page.title }</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text
                and a mostly barebones HTML document.</p>
        </div>

    </div><!-- /.container -->
    <div>
         <page></page>
    </div>
`;


var ThemeBalsamineFileLayoutJs ={
    template: template
};

