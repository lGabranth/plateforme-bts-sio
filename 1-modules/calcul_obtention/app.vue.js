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
		autorise:0,
	},
	methods:{
		CalculerMoyenne:function(){
			var scope = this;

			if (scope.culture_generale != "" && scope.maths != "" && scope.algorithmie != "" && scope.anglais 
				!= "" && scope.edm != "" && scope.e4 != "" && scope.e5 != "" && scope.e6)
			{
				
			}
		},
		Autorisation:function(){
			var autorise = (this.culture_generale != "" && this.maths != "" && this.algorithmie != "" && this.anglais != "" && this.edm != "" && this.e4 != "" && this.e5 != "" && this.e6 != "") ? true : false;
			if(autorise == true){
				if(this.matieres_option == 1){
					if(this.math_appro != "" || this.langue_vivante != ""){
						this.autorise = 1;
					}
					else this.autorise = 0;
				}
				else this.autorise = 1;
			}
			else this.autorise = 0;
		},
	},
	watch:{
		culture_generale(){
			if (this.culture_generale != "")
			{
				if (this.culture_generale > 20) this.culture_generale = 20;
				this.Autorisation();
			}
		},
		maths(){
			if (this.maths != "")
			{
				if (this.maths > 20) this.maths = 20;
				this.Autorisation();
			}
		},
		algorithmie(){
			if (this.algorithmie != "")
			{
				if (this.algorithmie > 20) this.algorithmie = 20;
				this.Autorisation();
			}
		},
		anglais(){
			if (this.anglais != "")
			{
				if (this.anglais > 20) this.anglais = 20;
				this.Autorisation();
			}
		},
		edm(){
			if (this.edm != "")
			{
				if (this.edm > 20) this.edm = 20;
				this.Autorisation();
			}
		},
		e4(){
			if (this.e4 != "")
			{
				if (this.e4 > 20) this.e4 = 20;
				this.Autorisation();
			}
		},
		e5(){
			if (this.e5 != "")
			{
				if (this.e5 > 20) this.e5 = 20;
				this.Autorisation();
			}
		},
		e6(){
			if (this.e6 != "")
			{
				if (this.e6 > 20) this.e6 = 20;
				this.Autorisation();
			}
		},
		math_appro(){
			if (this.math_appro != "")
			{
				if (this.math_appro > 20) this.math_appro = 20;
				this.Autorisation();
			}
		},
		langue_vivante(){
			if (this.langue_vivante != "")
			{
				if (this.langue_vivante > 20) this.langue_vivante = 20;
				this.Autorisation();
			}
		},
		matieres_option(){
			if(this.matieres_option == 0) {
				this.math_appro = "";
				this.langue_vivante = "";
			}
			else this.Autorisation();
		},
	},
})