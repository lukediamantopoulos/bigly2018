const findFixedPos = ( element ) => {
	return {
		x: element.getBoundingClientRect().left,
		y: element.getBoundingClientRect().top,
		w: element.offsetWidth,
		h: element.offsetHeight
	}
}
// Debounce runs every 20ms to avoid overlogging
function deBounce( func, wait = 20, immediate = true) {      
  var timeout;
  return function() {
    var context = this;
    var args = arguments;
    var later = function() {
      timeout = null;
      if ( !immediate ) func.apply( context, args );
    }
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout( later, wait );
    if ( callNow) func.apply( context, args );
  }
};

// Ignore white space when looking for previous node
function is_all_ws( nod ) {
  // Use ECMA-262 Edition 3 String and RegExp features
  return !(/[^\t\n\r ]/.test(nod.textContent));
}

function is_ignorable( nod ) {
  return ( nod.nodeType == 8) || // A comment node
         ( (nod.nodeType == 3) && is_all_ws(nod) ); // a text node, all ws
}

function node_before( sib ) {
  while ((sib = sib.previousSibling)) {
    if (!is_ignorable(sib)) return sib;
  }
  return null;
}

export default {
  findFixedPos,
  deBounce,
  is_all_ws,
  is_ignorable,
  node_before

}