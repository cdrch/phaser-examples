<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>phaser</title>
        <script src="/phaser/build/p2.js"></script>
        <script src="/phaser/src/Intro.js"></script>
        <script src="/phaser/src/pixi/Pixi.js"></script>
        <script src="/phaser/src/Phaser.js"></script>
        <script src="/phaser/src/utils/Utils.js"></script>
        <script src="/phaser/src/geom/Circle.js"></script>
        <script src="/phaser/src/geom/Point.js"></script>
        <script src="/phaser/src/geom/Rectangle.js"></script>
        <script src="/phaser/src/geom/Line.js"></script>
        <script src="/phaser/src/geom/Ellipse.js"></script>
        <script src="/phaser/src/geom/Polygon.js"></script>
        <script src="/phaser/src/pixi/core/Matrix.js"></script>
        <script src="/phaser/src/pixi/display/DisplayObject.js"></script>
        <script src="/phaser/src/pixi/display/DisplayObjectContainer.js"></script>
        <script src="/phaser/src/pixi/display/Sprite.js"></script>
        <script src="/phaser/src/pixi/display/SpriteBatch.js"></script>
        <script src="/phaser/src/pixi/filters/FilterBlock.js"></script>
        <script src="/phaser/src/pixi/text/Text.js"></script>
        <script src="/phaser/src/pixi/text/BitmapText.js"></script>
        <script src="/phaser/src/pixi/display/Stage.js"></script>
        <script src="/phaser/src/pixi/utils/EventTarget.js"></script>
        <script src="/phaser/src/pixi/utils/Polyk.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLShaderUtils.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/shaders/PixiShader.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/shaders/PixiFastShader.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/shaders/StripShader.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/shaders/PrimitiveShader.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLGraphics.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/WebGLRenderer.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLMaskManager.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLShaderManager.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLSpriteBatch.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLFastSpriteBatch.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/WebGLFilterManager.js"></script>
        <script src="/phaser/src/pixi/renderers/webgl/utils/FilterTexture.js"></script>
        <script src="/phaser/src/pixi/renderers/canvas/utils/CanvasMaskManager.js"></script>
        <script src="/phaser/src/pixi/renderers/canvas/utils/CanvasTinter.js"></script>
        <script src="/phaser/src/pixi/renderers/canvas/CanvasRenderer.js"></script>
        <script src="/phaser/src/pixi/renderers/canvas/CanvasGraphics.js"></script>
        <script src="/phaser/src/pixi/primitives/Graphics.js"></script>
        <script src="/phaser/src/pixi/extras/TilingSprite.js"></script>
        <script src="/phaser/src/pixi/textures/BaseTexture.js"></script>
        <script src="/phaser/src/pixi/textures/Texture.js"></script>
        <script src="/phaser/src/pixi/textures/RenderTexture.js"></script>
        <script src="/phaser/src/core/Camera.js"></script>
        <script src="/phaser/src/core/State.js"></script>
        <script src="/phaser/src/core/StateManager.js"></script>
        <script src="/phaser/src/core/LinkedList.js"></script>
        <script src="/phaser/src/core/Signal.js"></script>
        <script src="/phaser/src/core/SignalBinding.js"></script>
        <script src="/phaser/src/core/Filter.js"></script>
        <script src="/phaser/src/core/Plugin.js"></script>
        <script src="/phaser/src/core/PluginManager.js"></script>
        <script src="/phaser/src/core/Stage.js"></script>
        <script src="/phaser/src/core/Group.js"></script>
        <script src="/phaser/src/core/World.js"></script>
        <script src="/phaser/src/core/Game.js"></script>
        <script src="/phaser/src/core/ScaleManager.js"></script>
        <script src="/phaser/src/input/Input.js"></script>
        <script src="/phaser/src/input/Key.js"></script>
        <script src="/phaser/src/input/Keyboard.js"></script>
        <script src="/phaser/src/input/Mouse.js"></script>
        <script src="/phaser/src/input/MSPointer.js"></script>
        <script src="/phaser/src/input/Pointer.js"></script>
        <script src="/phaser/src/input/Touch.js"></script>
        <script src="/phaser/src/input/Gamepad.js"></script>
        <script src="/phaser/src/input/SinglePad.js"></script>
        <script src="/phaser/src/input/GamepadButton.js"></script>
        <script src="/phaser/src/input/InputHandler.js"></script>
        <script src="/phaser/src/gameobjects/Events.js"></script>
        <script src="/phaser/src/gameobjects/GameObjectCreator.js"></script>
        <script src="/phaser/src/gameobjects/GameObjectFactory.js"></script>
        <script src="/phaser/src/gameobjects/BitmapData.js"></script>
        <script src="/phaser/src/gameobjects/Sprite.js"></script>
        <script src="/phaser/src/gameobjects/Image.js"></script>
        <script src="/phaser/src/gameobjects/TileSprite.js"></script>
        <script src="/phaser/src/gameobjects/Text.js"></script>
        <script src="/phaser/src/gameobjects/BitmapText.js"></script>
        <script src="/phaser/src/gameobjects/Button.js"></script>
        <script src="/phaser/src/gameobjects/Graphics.js"></script>
        <script src="/phaser/src/gameobjects/RenderTexture.js"></script>
        <script src="/phaser/src/gameobjects/SpriteBatch.js"></script>
        <script src="/phaser/src/gameobjects/BitmapFont.js"></script>
        <script src="/phaser/src/system/Canvas.js"></script>
        <script src="/phaser/src/system/Device.js"></script>
        <script src="/phaser/src/system/RequestAnimationFrame.js"></script>
        <script src="/phaser/src/math/Math.js"></script>
        <script src="/phaser/src/math/RandomDataGenerator.js"></script>
        <script src="/phaser/src/net/Net.js"></script>
        <script src="/phaser/src/tween/TweenManager.js"></script>
        <script src="/phaser/src/tween/Tween.js"></script>
        <script src="/phaser/src/tween/Easing.js"></script>
        <script src="/phaser/src/time/Time.js"></script>
        <script src="/phaser/src/time/Timer.js"></script>
        <script src="/phaser/src/time/TimerEvent.js"></script>
        <script src="/phaser/src/animation/AnimationManager.js"></script>
        <script src="/phaser/src/animation/Animation.js"></script>
        <script src="/phaser/src/animation/Frame.js"></script>
        <script src="/phaser/src/animation/FrameData.js"></script>
        <script src="/phaser/src/animation/AnimationParser.js"></script>
        <script src="/phaser/src/loader/Cache.js"></script>
        <script src="/phaser/src/loader/Loader.js"></script>
        <script src="/phaser/src/loader/LoaderParser.js"></script>
        <script src="/phaser/src/sound/Sound.js"></script>
        <script src="/phaser/src/sound/SoundManager.js"></script>
        <script src="/phaser/src/utils/Debug.js"></script>
        <script src="/phaser/src/utils/Color.js"></script>
        <script src="/phaser/src/physics/World.js"></script>
        <script src="/phaser/src/physics/PointProxy.js"></script>
        <script src="/phaser/src/physics/InversePointProxy.js"></script>
        <script src="/phaser/src/physics/Body.js"></script>
        <script src="/phaser/src/physics/Spring.js"></script>
        <script src="/phaser/src/physics/Material.js"></script>
        <script src="/phaser/src/physics/ContactMaterial.js"></script>
        <script src="/phaser/src/physics/CollisionGroup.js"></script>
        <script src="/phaser/src/particles/Particles.js"></script>
        <script src="/phaser/src/particles/arcade/ArcadeParticles.js"></script>
        <script src="/phaser/src/particles/arcade/Emitter.js"></script>
        <script src="/phaser/src/tilemap/Tile.js"></script>
        <script src="/phaser/src/tilemap/Tilemap.js"></script>
        <script src="/phaser/src/tilemap/TilemapLayer.js"></script>
        <script src="/phaser/src/tilemap/TilemapParser.js"></script>
        <script src="/phaser/src/tilemap/Tileset.js"></script>
        <script src="/phaser/examples/wip/bmd.js" type="text/javascript"></script>
    </head>
    <body>

        <div id="phaser-example"></div>

    </body>
</html>