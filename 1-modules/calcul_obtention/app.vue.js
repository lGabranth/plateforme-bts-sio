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
	},
	methods:{
		CalculerMoyenne:function(){
			var scope = this;
			var datas = {};
			datas.culture_generale = scope.culture_generale;
			datas.maths            = scope.maths;
			datas.algorithmie      = scope.algorithmie;
			datas.anglais          = scope.anglais;
			datas.edm              = scope.edm;
			datas.e4               = scope.e4;
			datas.e5               = scope.e5;
			datas.e6               = scope.e6;
			datas.math_appro       = scope.math_appro;
			datas.langue_vivante   = scope.langue_vivante;

			if (scope.culture_generale != "" && scope.maths != "" && scope.algorithmie != "" && scope.anglais 
				!= "" && scope.edm != "" && scope.e4 != "" && scope.e5 != "" && scope.e6)
			{
				$.ajax({
					url:"data.php?cas=calculMoyenne",
					type:"POST",
					data:datas,
					success:function(data){
						
					},
					error:function(){
					}
				});
			}
		},
	},
})