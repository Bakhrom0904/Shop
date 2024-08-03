

var visible_boxes = 0 ; 
var itemBoxesObj = document.getElementsByClassName("item-box")

for(let box of document.getElementsByClassName("item-box-img") ){
	box.style.background = `url("img/${box.dataset.imageUrl}")`
}

function fix_width(itemCount){
	document.getElementsByClassName("item-lst")[0].style.width = `${itemCount * 220 - 20}px`
}

fix_width(document.getElementsByClassName("item-box").length)
visible_boxes = itemBoxesObj.length ; 



for(let btn of document.getElementsByClassName("filter-btn")){
	btn.addEventListener("click" , function(){

		if(btn.dataset.filterType == "_all"){
			for(let obj of itemBoxesObj){
				obj.style.display = "block" ;
				console.log("iteration")
			}
			visible_boxes = itemBoxesObj.length ; 
			fix_width(visible_boxes)
			return ; 
			console.log("fuck you") ;
		}

		for(let obj of itemBoxesObj){
			if(obj.dataset.itemType == btn.dataset.filterType){
				if(!obj.style.display != "block"){
					obj.style.display = "block" ; 
					visible_boxes++ ; 
				}
			}else{
				if(obj.style.display != "none"){
					visible_boxes-- ; 
					obj.style.display = "none" ;
				} 
			}
		}
		fix_width(visible_boxes)
	})
}


