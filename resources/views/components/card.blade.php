<div>
    <div
      x-data="{ data: [
			{
				id: 1,
				name: 'Facturas cargadas',
				numero: '123'
			},
			{
				id: 2,
				name: 'Facturas con recibos',
				numero: '123'
			},
			{
				id: 3,
				name: 'Facturas cotejadas',
				numero: '123'
			},
			{
				id: 4,
				name: 'Facturas pagadas',
				numero: '123'
			}]}"
      class="container flex flex-row gap-2 flex-wrap py-10 justify-center"
    >
      <div
        class="card w-60 sm:w-64 p-2 bg-white border border-gray-200 rounded-2xl shadow-lg shadow-gray-300 hover:shadow-none"
        data-tilt
        data-tilt-axis="x"
      >
        <div
          x-init="card = data[0]"
          class="flex flex-row gap-4 p-2 items-center"
        >
          <div class="flex-shrink-0 basis-1/4">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" class="p-4 w-12 h-12 rounded-full bg-red-500 shadow-md">
            <path d="M9.25 13.25a.75.75 0 001.5 0V4.636l2.955 3.129a.75.75 0 001.09-1.03l-4.25-4.5a.75.75 0 00-1.09 0l-4.25 4.5a.75.75 0 101.09 1.03L9.25 4.636v8.614z" />
             <path d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z" />
           </svg>
          </div>
          <div class="flex flex-col gap-2">
            <p
              class="text-md font-normal tracking-tight text-gray-900 basis-3/4"
              x-text="card.name"
            ></p>
            <p
              class="text-3xl text-center font-bold tracking-tight text-gray-900 basis-3/4"
              x-text="card.numero"
            ></p>
          </div>
        </div>
      </div>
      <div
        class="card w-60 sm:w-64 p-2 bg-white border border-gray-200 rounded-2xl shadow-lg shadow-gray-300 hover:shadow-none"
        data-tilt
        data-tilt-axis="x"
      >
        <div
          x-init="card = data[1]"
          class="flex flex-row gap-4 p-2 items-center"
        >
          <div class="flex-shrink-0 basis-1/4">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="p-4 w-12 h-12 rounded-full bg-blue-500 shadow-md">
             <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
           </svg>

          </div>
          <div class="flex flex-col gap-2">
            <p
              class="text-md font-normal tracking-tight text-gray-900 basis-3/4"
              x-text="card.name"
            ></p>
            <p
              class="text-3xl text-center font-bold tracking-tight text-gray-900 basis-3/4"
              x-text="card.numero"
            ></p>
          </div>
        </div>
      </div>
      <div
        class="card w-60 sm:w-64 p-2 bg-white border border-gray-200 rounded-2xl shadow-lg shadow-gray-300 hover:shadow-none"
        data-tilt
        data-tilt-axis="x"
      >
        <div
          x-init="card = data[2]"
          class="flex flex-row gap-4 p-2 items-center"
        >
          <div class="flex-shrink-0 basis-1/4 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="p-4 w-12 h-12 rounded-full bg-yellow-500 shadow-md">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
            </svg>
          </div>
          <div class="flex flex-col gap-2">
            <p
              class="text-md font-normal tracking-tight text-gray-900 basis-3/4"
              x-text="card.name"
            ></p>
            <p
              class="text-3xl text-center font-bold tracking-tight text-gray-900 basis-3/4"
              x-text="card.numero"
            ></p>
          </div>
        </div>
      </div>
      <div
        class="card w-60 sm:w-64 p-2 bg-white border border-gray-200 rounded-2xl shadow-lg shadow-gray-300 hover:shadow-none"
        data-tilt
        data-tilt-axis="x"
      >
        <div
          x-init="card = data[3]"
          class="flex flex-row gap-4 p-2 items-center"
        >
          <div class="flex-shrink-0 basis-1/4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="p-4 w-12 h-12 rounded-full bg-green-500 shadow-md">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
            </svg>
          </div>
          <div class="flex flex-col gap-2">
            <p
              class="text-md font-normal tracking-tight text-gray-900 basis-3/4"
              x-text="card.name"
            ></p>
            <p
              class="text-3xl text-center font-bold tracking-tight text-gray-900 basis-3/4"
              x-text="card.numero"
            ></p>
          </div>
        </div>
      </div>
    </div>

    <div
      x-data="{ data: [
		{
			id: 1,
			name: 'Facturas con CRP',
			numero: '123'
		},
		{
			id: 2,
			name: 'Pendientes de CRP',
			numero: '123'
		},
		]}"
      class="container flex flex-row gap-2 flex-wrap py-10 justify-center"
    >
      <div
        class="card sm:w-[32.5rem] p-2 bg-white border border-gray-200 rounded-2xl shadow-lg shadow-gray-300 hover:shadow-none"
        data-tilt
        data-tilt-axis="x"
      >
        <div
          x-init="card = data[0]"
          class="flex flex-row gap-4 p-2 items-center"
        >
          <div class="flex-shrink-0 basis-1/4 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="p-4 w-12 h-12 rounded-full bg-green-500 shadow-md justify-center content-center">
             <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
            </svg>
          </div>
          <div class="flex flex-row space-between w-full">
            <p
              class="text-md font-normal tracking-tight text-gray-900 basis-3/4 flex items-center justify-center"
              x-text="card.name"
            ></p>
            <p
              class="text-3xl text-center font-bold tracking-tight text-gray-900 basis-3/4"
              x-text="card.numero"
            ></p>
          </div>
        </div>
      </div>
      <div
        class="card sm:w-[32.5rem] p-2 bg-white border border-gray-200 rounded-2xl shadow-lg shadow-gray-300 hover:shadow-none"
        data-tilt
        data-tilt-axis="x"
      >
        <div
          x-init="card = data[1]"
          class="flex flex-row gap-4 p-2 items-center"
        >
          <div class="flex-shrink-0 basis-1/4 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="p-4 w-12 h-12 rounded-full bg-yellow-500 shadow-md">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
          </div>
          <div class="flex flex-row space-between w-full">
            <p
              class="text-md font-normal tracking-tight text-gray-900 basis-3/4 flex items-center justify-center"
              x-text="card.name"
            ></p>
            <p
              class="text-3xl text-center font-bold tracking-tight text-gray-900 basis-3/4"
              x-text="card.numero"
            ></p>
          </div>
        </div>
      </div>
    </div>
<script>
      var VanillaTilt = (function () {
'use strict';

/**
 * Created by Sergiu Șandor (micku7zu) on 1/27/2017.
 * Original idea: https://github.com/gijsroge/tilt.js
 * MIT License.
 * Version 1.8.1
 */

class VanillaTilt {
  constructor(element, settings = {}) {
    if (!(element instanceof Node)) {
      throw ("Can't initialize VanillaTilt because " + element + " is not a Node.");
    }

    this.width = null;
    this.height = null;
    this.clientWidth = null;
    this.clientHeight = null;
    this.left = null;
    this.top = null;

    // for Gyroscope sampling
    this.gammazero = null;
    this.betazero = null;
    this.lastgammazero = null;
    this.lastbetazero = null;

    this.transitionTimeout = null;
    this.updateCall = null;
    this.event = null;

    this.updateBind = this.update.bind(this);
    this.resetBind = this.reset.bind(this);

    this.element = element;
    this.settings = this.extendSettings(settings);

    this.reverse = this.settings.reverse ? -1 : 1;
    this.resetToStart = VanillaTilt.isSettingTrue(this.settings["reset-to-start"]);
    this.glare = VanillaTilt.isSettingTrue(this.settings.glare);
    this.glarePrerender = VanillaTilt.isSettingTrue(this.settings["glare-prerender"]);
    this.fullPageListening = VanillaTilt.isSettingTrue(this.settings["full-page-listening"]);
    this.gyroscope = VanillaTilt.isSettingTrue(this.settings.gyroscope);
    this.gyroscopeSamples = this.settings.gyroscopeSamples;

    this.elementListener = this.getElementListener();

    if (this.glare) {
      this.prepareGlare();
    }

    if (this.fullPageListening) {
      this.updateClientSize();
    }

    this.addEventListeners();
    this.reset();

    if (this.resetToStart === false) {
      this.settings.startX = 0;
      this.settings.startY = 0;
    }
  }

  static isSettingTrue(setting) {
    return setting === "" || setting === true || setting === 1;
  }

  /**
   * Method returns element what will be listen mouse events
   * @return {Node}
   */
  getElementListener() {
    if (this.fullPageListening) {
      return window.document;
    }

    if (typeof this.settings["mouse-event-element"] === "string") {
      const mouseEventElement = document.querySelector(this.settings["mouse-event-element"]);

      if (mouseEventElement) {
        return mouseEventElement;
      }
    }

    if (this.settings["mouse-event-element"] instanceof Node) {
      return this.settings["mouse-event-element"];
    }

    return this.element;
  }

  /**
   * Method set listen methods for this.elementListener
   * @return {Node}
   */
  addEventListeners() {
    this.onMouseEnterBind = this.onMouseEnter.bind(this);
    this.onMouseMoveBind = this.onMouseMove.bind(this);
    this.onMouseLeaveBind = this.onMouseLeave.bind(this);
    this.onWindowResizeBind = this.onWindowResize.bind(this);
    this.onDeviceOrientationBind = this.onDeviceOrientation.bind(this);

    this.elementListener.addEventListener("mouseenter", this.onMouseEnterBind);
    this.elementListener.addEventListener("mouseleave", this.onMouseLeaveBind);
    this.elementListener.addEventListener("mousemove", this.onMouseMoveBind);

    if (this.glare || this.fullPageListening) {
      window.addEventListener("resize", this.onWindowResizeBind);
    }

    if (this.gyroscope) {
      window.addEventListener("deviceorientation", this.onDeviceOrientationBind);
    }
  }

  /**
   * Method remove event listeners from current this.elementListener
   */
  removeEventListeners() {
    this.elementListener.removeEventListener("mouseenter", this.onMouseEnterBind);
    this.elementListener.removeEventListener("mouseleave", this.onMouseLeaveBind);
    this.elementListener.removeEventListener("mousemove", this.onMouseMoveBind);

    if (this.gyroscope) {
      window.removeEventListener("deviceorientation", this.onDeviceOrientationBind);
    }

    if (this.glare || this.fullPageListening) {
      window.removeEventListener("resize", this.onWindowResizeBind);
    }
  }

  destroy() {
    clearTimeout(this.transitionTimeout);
    if (this.updateCall !== null) {
      cancelAnimationFrame(this.updateCall);
    }

    this.element.style.willChange = "";
    this.element.style.transition = "";
    this.element.style.transform = "";
    this.resetGlare();

    this.removeEventListeners();
    this.element.vanillaTilt = null;
    delete this.element.vanillaTilt;

    this.element = null;
  }

  onDeviceOrientation(event) {
    if (event.gamma === null || event.beta === null) {
      return;
    }

    this.updateElementPosition();

    if (this.gyroscopeSamples > 0) {
      this.lastgammazero = this.gammazero;
      this.lastbetazero = this.betazero;

      if (this.gammazero === null) {
        this.gammazero = event.gamma;
        this.betazero = event.beta;
      } else {
        this.gammazero = (event.gamma + this.lastgammazero) / 2;
        this.betazero = (event.beta + this.lastbetazero) / 2;
      }

      this.gyroscopeSamples -= 1;
    }

    const totalAngleX = this.settings.gyroscopeMaxAngleX - this.settings.gyroscopeMinAngleX;
    const totalAngleY = this.settings.gyroscopeMaxAngleY - this.settings.gyroscopeMinAngleY;

    const degreesPerPixelX = totalAngleX / this.width;
    const degreesPerPixelY = totalAngleY / this.height;

    const angleX = event.gamma - (this.settings.gyroscopeMinAngleX + this.gammazero);
    const angleY = event.beta - (this.settings.gyroscopeMinAngleY + this.betazero);

    const posX = angleX / degreesPerPixelX;
    const posY = angleY / degreesPerPixelY;

    if (this.updateCall !== null) {
      cancelAnimationFrame(this.updateCall);
    }

    this.event = {
      clientX: posX + this.left,
      clientY: posY + this.top,
    };

    this.updateCall = requestAnimationFrame(this.updateBind);
  }

  onMouseEnter() {
    this.updateElementPosition();
    this.element.style.willChange = "transform";
    this.setTransition();
  }

  onMouseMove(event) {
    if (this.updateCall !== null) {
      cancelAnimationFrame(this.updateCall);
    }

    this.event = event;
    this.updateCall = requestAnimationFrame(this.updateBind);
  }

  onMouseLeave() {
    this.setTransition();

    if (this.settings.reset) {
      requestAnimationFrame(this.resetBind);
    }
  }

  reset() {
    this.onMouseEnter();

    if (this.fullPageListening) {
      this.event = {
        clientX: (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.clientWidth,
        clientY: (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.clientHeight
      };
    } else {
      this.event = {
        clientX: this.left + ((this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.width),
        clientY: this.top + ((this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.height)
      };
    }

    let backupScale = this.settings.scale;
    this.settings.scale = 1;
    this.update();
    this.settings.scale = backupScale;
    this.resetGlare();
  }

  resetGlare() {
    if (this.glare) {
      this.glareElement.style.transform = "rotate(180deg) translate(-50%, -50%)";
      this.glareElement.style.opacity = "0";
    }
  }

  getValues() {
    let x, y;

    if (this.fullPageListening) {
      x = this.event.clientX / this.clientWidth;
      y = this.event.clientY / this.clientHeight;
    } else {
      x = (this.event.clientX - this.left) / this.width;
      y = (this.event.clientY - this.top) / this.height;
    }

    x = Math.min(Math.max(x, 0), 1);
    y = Math.min(Math.max(y, 0), 1);

    let tiltX = (this.reverse * (this.settings.max - x * this.settings.max * 2)).toFixed(2);
    let tiltY = (this.reverse * (y * this.settings.max * 2 - this.settings.max)).toFixed(2);
    let angle = Math.atan2(this.event.clientX - (this.left + this.width / 2), -(this.event.clientY - (this.top + this.height / 2))) * (180 / Math.PI);

    return {
      tiltX: tiltX,
      tiltY: tiltY,
      percentageX: x * 100,
      percentageY: y * 100,
      angle: angle
    };
  }

  updateElementPosition() {
    let rect = this.element.getBoundingClientRect();

    this.width = this.element.offsetWidth;
    this.height = this.element.offsetHeight;
    this.left = rect.left;
    this.top = rect.top;
  }

  update() {
    let values = this.getValues();

    this.element.style.transform = "perspective(" + this.settings.perspective + "px) " +
      "rotateX(" + (this.settings.axis === "x" ? 0 : values.tiltY) + "deg) " +
      "rotateY(" + (this.settings.axis === "y" ? 0 : values.tiltX) + "deg) " +
      "scale3d(" + this.settings.scale + ", " + this.settings.scale + ", " + this.settings.scale + ")";

    if (this.glare) {
      this.glareElement.style.transform = `rotate(${values.angle}deg) translate(-50%, -50%)`;
      this.glareElement.style.opacity = `${values.percentageY * this.settings["max-glare"] / 100}`;
    }

    this.element.dispatchEvent(new CustomEvent("tiltChange", {
      "detail": values
    }));

    this.updateCall = null;
  }

  /**
   * Appends the glare element (if glarePrerender equals false)
   * and sets the default style
   */
  prepareGlare() {
    // If option pre-render is enabled we assume all html/css is present for an optimal glare effect.
    if (!this.glarePrerender) {
      // Create glare element
      const jsTiltGlare = document.createElement("div");
      jsTiltGlare.classList.add("js-tilt-glare");

      const jsTiltGlareInner = document.createElement("div");
      jsTiltGlareInner.classList.add("js-tilt-glare-inner");

      jsTiltGlare.appendChild(jsTiltGlareInner);
      this.element.appendChild(jsTiltGlare);
    }

    this.glareElementWrapper = this.element.querySelector(".js-tilt-glare");
    this.glareElement = this.element.querySelector(".js-tilt-glare-inner");

    if (this.glarePrerender) {
      return;
    }

    Object.assign(this.glareElementWrapper.style, {
      "position": "absolute",
      "top": "0",
      "left": "0",
      "width": "100%",
      "height": "100%",
      "overflow": "hidden",
      "pointer-events": "none",
      "border-radius": "inherit"
    });

    Object.assign(this.glareElement.style, {
      "position": "absolute",
      "top": "50%",
      "left": "50%",
      "pointer-events": "none",
      "background-image": `linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)`,
      "transform": "rotate(180deg) translate(-50%, -50%)",
      "transform-origin": "0% 0%",
      "opacity": "0"
    });

    this.updateGlareSize();
  }

  updateGlareSize() {
    if (this.glare) {
      const glareSize = (this.element.offsetWidth > this.element.offsetHeight ? this.element.offsetWidth : this.element.offsetHeight) * 2;

      Object.assign(this.glareElement.style, {
        "width": `${glareSize}px`,
        "height": `${glareSize}px`,
      });
    }
  }

  updateClientSize() {
    this.clientWidth = window.innerWidth
      || document.documentElement.clientWidth
      || document.body.clientWidth;

    this.clientHeight = window.innerHeight
      || document.documentElement.clientHeight
      || document.body.clientHeight;
  }

  onWindowResize() {
    this.updateGlareSize();
    this.updateClientSize();
  }

  setTransition() {
    clearTimeout(this.transitionTimeout);
    this.element.style.transition = this.settings.speed + "ms " + this.settings.easing;
    if (this.glare) this.glareElement.style.transition = `opacity ${this.settings.speed}ms ${this.settings.easing}`;

    this.transitionTimeout = setTimeout(() => {
      this.element.style.transition = "";
      if (this.glare) {
        this.glareElement.style.transition = "";
      }
    }, this.settings.speed);

  }

  /**
   * Method return patched settings of instance
   * @param {boolean} settings.reverse - reverse the tilt direction
   * @param {number} settings.max - max tilt rotation (degrees)
   * @param {startX} settings.startX - the starting tilt on the X axis, in degrees. Default: 0
   * @param {startY} settings.startY - the starting tilt on the Y axis, in degrees. Default: 0
   * @param {number} settings.perspective - Transform perspective, the lower the more extreme the tilt gets
   * @param {string} settings.easing - Easing on enter/exit
   * @param {number} settings.scale - 2 = 200%, 1.5 = 150%, etc..
   * @param {number} settings.speed - Speed of the enter/exit transition
   * @param {boolean} settings.transition - Set a transition on enter/exit
   * @param {string|null} settings.axis - What axis should be enabled. Can be "x" or "y"
   * @param {boolean} settings.glare - if it should have a "glare" effect
   * @param {number} settings.max-glare - the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
   * @param {boolean} settings.glare-prerender - false = VanillaTilt creates the glare elements for you, otherwise
   * @param {boolean} settings.full-page-listening - If true, parallax effect will listen to mouse move events on the whole document, not only the selected element
   * @param {string|object} settings.mouse-event-element - String selector or link to HTML-element what will be listen mouse events
   * @param {boolean} settings.reset - false = If the tilt effect has to be reset on exit
   * @param {boolean} settings.reset-to-start - true = On reset event (mouse leave) will return to initial start angle (if startX or startY is set)
   * @param {gyroscope} settings.gyroscope - Enable tilting by deviceorientation events
   * @param {gyroscopeSensitivity} settings.gyroscopeSensitivity - Between 0 and 1 - The angle at which max tilt position is reached. 1 = 90deg, 0.5 = 45deg, etc..
   * @param {gyroscopeSamples} settings.gyroscopeSamples - How many gyroscope moves to decide the starting position.
   */
  extendSettings(settings) {
    let defaultSettings = {
      reverse: false,
      max: 15,
      startX: 0,
      startY: 0,
      perspective: 1000,
      easing: "cubic-bezier(.03,.98,.52,.99)",
      scale: 1,
      speed: 300,
      transition: true,
      axis: null,
      glare: false,
      "max-glare": 1,
      "glare-prerender": false,
      "full-page-listening": false,
      "mouse-event-element": null,
      reset: true,
      "reset-to-start": true,
      gyroscope: true,
      gyroscopeMinAngleX: -45,
      gyroscopeMaxAngleX: 45,
      gyroscopeMinAngleY: -45,
      gyroscopeMaxAngleY: 45,
      gyroscopeSamples: 10
    };

    let newSettings = {};
    for (var property in defaultSettings) {
      if (property in settings) {
        newSettings[property] = settings[property];
      } else if (this.element.hasAttribute("data-tilt-" + property)) {
        let attribute = this.element.getAttribute("data-tilt-" + property);
        try {
          newSettings[property] = JSON.parse(attribute);
        } catch (e) {
          newSettings[property] = attribute;
        }

      } else {
        newSettings[property] = defaultSettings[property];
      }
    }

    return newSettings;
  }

  static init(elements, settings) {
    if (elements instanceof Node) {
      elements = [elements];
    }

    if (elements instanceof NodeList) {
      elements = [].slice.call(elements);
    }

    if (!(elements instanceof Array)) {
      return;
    }

    elements.forEach((element) => {
      if (!("vanillaTilt" in element)) {
        element.vanillaTilt = new VanillaTilt(element, settings);
      }
    });
  }
}

if (typeof document !== "undefined") {
  /* expose the class to window */
  window.VanillaTilt = VanillaTilt;

  /**
   * Auto load
   */
  VanillaTilt.init(document.querySelectorAll("[data-tilt]"));
}

return VanillaTilt;

}());

</script>

</div>
 


