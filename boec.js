baza={};
baza.map=[];
baza.init = function(){
	max=3;
	min=-3;
	for (i=0;i<11;i++){
		baza.map[i]=[];
		for (j=0;j<11;j++){
			baza.map[i][j]=Math.floor(Math.random() * (max - min+1) + min);;
		}
	}
	return baza.map;
}
baza.show=function(){var a='';
	for (i=0;i<baza.map.length;i++){
		
		for (j=0;j<baza['map'][i].length;j++){
			a+=baza.map[i][j]+'\t';
		}
		a+="\n";
	}
	console.log(a);
	
}
baza.init();
baza.show();

function operator(name,login,level,x,y){
	this.name=name;
	this.login=login;
	this.level=level;
	this.x=x;
	this.y=y;
	this.unidig = function(x,y){
		if ((x<0||x>10)||(y<0||y>10)) return 'Error coord';
		this.x=x;
		this.y=y;
		this.dig();
	}
	this.unifill=function(x,y){
		if ((x<0||x>10)||(y<0||y>10)) return 'Error coord';
		this.x=x;
		this.y=y;
		this.fill();
	}
	this.dig = function(a){
		if (a==undefined) a=1;
		baza.map[this.x][this.y]-=a;
		this.look(2);
	}
	this.fill = function(a){
		if (a==undefined) a=1;
		baza.map[this.x][this.y]+=a;
		this.look(2)
	}
	
	this.look=function(n){
		a='';
		sx=this.x-n;
		fx=this.x+n;
		sy=this.y-n;
		fy=this.y+n;
		//alert(sx+"\t"+fx+"\t"+sy+"\t"+fy+"\t");
		if (sx<0) sx=0;
		if (sy<0) sy=0;
		if (fx>10) fx=10;
		if (fy>10) fy=10;
		console.log("sx="+sx+"sy="+sy+"fx="+fx+"fy="+fy);
		for (i=sx;i<=fx;i++){
			for (j=sy;j<=fy;j++){
				if ((i==this.x)&&(j==this.y)) a+="(";
				a+=baza.map[i][j];
				if ((i==this.x)&&(j==this.y)) a+=")";
				a+="\t"
			}
			a+='\n';
		}
		console.log(a);
		this.mylocation();
	}
	this.right = function (){this.y++;if (this.y>10) this.y=10;this.look(2)}
	this.left = function (){this.y--;if (this.y<0) this.y=0;this.look(2)}
	this.up = function (){this.x--;if (this.x<0) this.x=0;this.look(2);}
	this.down = function (){this.x++;if (this.x>10) this.x=10;this.look(2)}
	this.mylocation = function(){
		console.log('Я нахожусь на позиции x='+this.x+' y='+this.y);
	}
}
//
var ivan= new operator('Иван','hiddenfun',3,2,2)
