Run tailwindcss
cd into the tailwindcss folder
> npx tailwindcss -i ./input.css -o ../app.css --watch


Snippet for PHP
Ctrl+Shit+P
> PHP
Insert the snippet
{
	// Place your snippets for php here. Each snippet is defined under a snippet name and has a prefix, body and 
	// description. The prefix is what is used to trigger the snippet and the body will be expanded and inserted. Possible variables are:
	// $1, $2 for tab stops, $0 for the final cursor position, and ${1:label}, ${2:another} for placeholders. Placeholders with the 
	// same ids are connected.
	// Example:

	"API for PHP": {
		"prefix": "_api",
		"body": [
			"require_once __DIR__.'/../_.php';",
			"try{"
      ""
      "\t$1"
      ""
      "}catch(Exception $$e){"
        "\ttry{"
          "\t\tif( ! $$e->getCode() || ! $$e->getMessage()){ throw new Exception(); }"
          "\t\thttp_response_code($$e->getCode());"
          "\t\techo json_encode(['info'=>$$e->getMessage()]);"
        "\t}catch(Exception $$ex){"
          "\t\thttp_response_code(500);"
          "\t\techo json_encode($$ex); "   
        "\t}"
      "}"
		],
		"description": "Create a basic API that supports exceptions"
	}

}