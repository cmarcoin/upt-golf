
		    var targetRotation = 20;
			var targetRotationOnMouseDown = 0;
			var mouseXOnMouseDown = 0;
			var container, stats;
			var camera, scene, renderer;
			var group;
			var mouseX = 0, mouseY = 0;
			var windowInitX = window.innerWidth;
			var windowInitY = window.innerHeight;
			var ratio=windowInitX/windowInitY;
			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;
			init();
			animate();
			function init() {
				container = document.getElementById( 'container' );
				container2 = document.getElementById( 'container2' );
                 //alert(windowInitX/windowInitY)
				camera = new THREE.PerspectiveCamera( 75, 4.5, 1, 2000 );
				camera.position.z = 200;
				scene = new THREE.Scene();
				group = new THREE.Group();
				scene.add( group );
				scene.add(camera);
				// Balle
				var loader = new THREE.TextureLoader();
				loader.load( '/images/logo.jpg', function ( texture ) {
					var geometry = new THREE.SphereGeometry( 35, 20, 20 );
					var material = new THREE.MeshPhongMaterial( { map: texture, overdraw: 0.4 } );
					var mesh = new THREE.Mesh( geometry, material );
					mesh.position.y=20;
					group.add( mesh );
				} );
                // plan de fond
				loader.load( '/images/banner-background.jpg', function ( texture ) {
					var geometry = new THREE.PlaneBufferGeometry( 1381, 382, 0 , 0);
					var material = new THREE.MeshPhongMaterial( { map: texture, overdraw: 0.4 } );
					var mesh = new THREE.Mesh( geometry, material );
					scene.add( mesh );
				} )


				 var dirLight = new THREE.DirectionalLight();
                 dirLight.position.set(25, 23, 15);
                 scene.add(dirLight);


                 var dirLight2 = new THREE.DirectionalLight();
                 dirLight2.position.set(-25, 23, 15);
                 scene.add(dirLight2);

				 var options1 = {
                    size: 20,
                    height: 10,
                    weight: "normal",
                    font: "optimer",
                    style: "normal",
                    bevelThickness: 0.0,
                    bevelSize: 0.0,
                    bevelSegments: 0,
                    bevelEnabled: false,
                    curveSegments: 12,
                    steps: 0
                };

                 var options2 = {
                    size: 10,
                    height: 4,
                    weight: "normal",                    
                    font:  "optimer",
                    style: "normal",
                    bevelThickness: 0.0,
                    bevelSize: 0.0,
                    bevelSegments: 0,
                    bevelEnabled: false,
                    curveSegments: 12,
                    steps: 0
                };


				text1= createMesh(new THREE.TextGeometry("UPT Section golf", options1));
				text1.position.z=20;
				text1.position.x=-90;
				text1.position.y=-55;
				scene.add(text1);
				
                var phrase="La section \"Golf\" de l'Université pour tous (UPT)";
             
				text2= createMesh(new THREE.TextGeometry(phrase, options2));
				text2.position.z=20;
				text2.position.x=-135;
				text2.position.y=-75;
				scene.add(text2);

				renderer = new THREE.CanvasRenderer();
				//renderer = new THREE.WebGLRenderer();
				renderer.setClearColor(new THREE.Color(0xcccccc, 1.0));
				renderer.setSize( window.innerWidth/1, window.innerHeight/2.2);
				/*var p = document.createElement("a");
				p.innerHTML="<h1>Réserver pour lundi prochain</h1>";
				container2.appendChild(p);*/
				//renderer.domElement.setAttribute('height', '800px');
				container.setAttribute('height', '1200px')
				//renderer.domElement.setAttribute('background-color' ,  '0xcccccc');
				container.appendChild( renderer.domElement );

				
				stats = new Stats();
				//events
				document.addEventListener( 'mousedown', onDocumentMouseDown, false );
        		document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				window.addEventListener( 'resize', onWindowResize, false );
			}
			function onWindowResize() {
				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;
				camera.aspect = 4.5*(window.innerWidth / window.innerHeight)/ratio;
				camera.updateProjectionMatrix();
				renderer.setSize( window.innerWidth, window.innerHeight/2.2);
			}

			function onDocumentMouseDown( event ) {
				event.preventDefault();
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'mouseup', onDocumentMouseUp, false );
				document.addEventListener( 'mouseout', onDocumentMouseOut, false );
				mouseXOnMouseDown = event.clientX - windowHalfX;
				targetRotationOnMouseDown = targetRotation;
			}
			function onDocumentMouseMove( event ) {
				mouseX = event.clientX - windowHalfX;
				targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.02;
			}
			function onDocumentMouseUp( event ) {
				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
				document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
				document.removeEventListener( 'mouseout', onDocumentMouseOut, false );
			}
			function onDocumentMouseOut( event ) {
				document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
				document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
				document.removeEventListener( 'mouseout', onDocumentMouseOut, false );
			}
			function encodeUTF8(str){

				return unescape(encodeURIComponent(str));
			}
			function decodeUTF8(str){

				return decodeURIComponent(escape(str));
			}

			 function createMesh(geom) {
            var meshMaterial = new THREE.MeshPhongMaterial({
                specular: 0xffffff,
                color: 0xeeffff,
                shininess: 100,
                metal: true
            });
//            meshMaterial.side=THREE.DoubleSide;
            // create a multimaterial
            var plane = THREE.SceneUtils.createMultiMaterialObject(geom, [meshMaterial]);

            return plane;
        }
			
			
			//
			function animate() {
				
				requestAnimationFrame( animate );
				render();
				stats.update();
			}
			function render() {
				//group.rotation.y += ( targetRotation - group.rotation.y ) * 0.08;
				
				//camera.position.x += ( mouseX - camera.position.x ) * 0.05;
				//camera.position.y += ( - mouseY - camera.position.y ) * 0.05;
				
				camera.lookAt( scene.position );
				group.rotation.y += 0.15;
				renderer.render( scene, camera );
			}
		
