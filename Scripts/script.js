

let id = $("input[name *= 'book_id']");
id.attr("readonly", "readonly");

$(".btnedit").click(e =>
{
	let textvalues = displayData(e);

	let bookname = $("input[name *= 'book_name']");
	let bookauthor = $("input[name *= 'book_author']");
	let bookpublisher = $("input[name *= 'book_publisher']");
	let bookisbn = $("input[name *= 'book_isbn']");
	let bookdescription = $("input[name *= 'book_description']");
	let bookdate = $("input[name *= 'book_date']");
	let bookprice = $("input[name *= 'book_price']");
	let bookimage = $("input[name *= 'book_image']");

	id.val(textvalues[0]);
	bookname.val(textvalues[1]);
	bookauthor.val(textvalues[2]);
	bookpublisher.val(textvalues[3]); 
	bookisbn.val(textvalues[4]);
	bookdescription.val(textvalues[5]);  
	bookdate.val(textvalues[6]);
	bookprice.val(textvalues[7].replace("€", ""));
	bookimage.val(textvalues[8]);
});

function displayData(e)
{
	let id = 0;
	const td = $("#tbody tr td");
	let textvalues = [];

	for(const value of td)
	{
		if(value.dataset.id == e.target.dataset.id)
		{
			textvalues[id++] = value.textContent;
		}
	}

	return textvalues;
}