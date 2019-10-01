var app = new Vue({
	el:"#app",
	data:{
		culture_generale:"",
		maths:"",
		algorithmie:"",
		anglais:"",
		edm:"",
		e4:"",
		e5:"",
		e6:"",
		matieres_option:0,
		math_appro:"",
		langue_vivante:"",
		moyenne:0,
	},
	methods:{
		CalculerMoyenne:function(){
			var scope = this;

			if (scope.culture_generale != "" && scope.maths != "" && scope.algorithmie != "" && scope.anglais 
				!= "" && scope.edm != "" && scope.e4 != "" && scope.e5 != "" && scope.e6)
			{
				
			}
		},
	},
	watch:{
		culture_generale(){
			if (this.culture_generale != "")
			{
				if (this.culture_generale > 20) this.culture_generale = 20;
			}
		},
		maths(){
			if (this.maths != "")
			{
				if (this.maths > 20) this.maths = 20;
			}
		},
		algorithmie(){
			if (this.algorithmie != "")
			{
				if (this.algorithmie > 20) this.algorithmie = 20;
			}
		},
		anglais(){
			if (this.anglais != "")
			{
				if (this.anglais > 20) this.anglais = 20;
			}
		},
		edm(){
			if (this.edm != "")
			{
				if (this.edm > 20) this.edm = 20;
			}
		},
		e4(){
			if (this.e4 != "")
			{
				if (this.e4 > 20) this.e4 = 20;
			}
		},
		e5(){
			if (this.e5 != "")
			{
				if (this.e5 > 20) this.e5 = 20;
			}
		},
		e6(){
			if (this.e6 != "")
			{
				if (this.e6 > 20) this.e6 = 20;
			}
		},
		math_appro(){
			if (this.math_appro != "")
			{
				if (this.math_appro > 20) this.math_appro = 20;
			}
		},
		langue_vivante(){
			if (this.langue_vivante != "")
			{
				if (this.langue_vivante > 20) this.langue_vivante = 20;
			}
		},
	},
})