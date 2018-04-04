;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-dingwei" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M816.8428 332.8973c0-157.1369-129.324-284.5409-288.9861-284.5409-159.5924 0-288.9851 127.404-288.9851 284.5409 0 51.9004 14.3647 100.3704 38.9734 142.2643h-0.310272l245.7211 488.8525c0.8407 1.6742 2.5733 2.8211 4.5742 2.8211 1.9999 0 3.7335-1.1459 4.5742-2.8201L778.2502 475.1616h-0.35328C802.5907 433.2667 816.8428 384.7967 816.8428 332.8973M527.8843 475.1329c-79.7809 0-144.4915-63.7092-144.4915-142.2776 0-78.5254 64.7107-142.2633 144.4915-142.2633 79.8669 0 144.4925 63.7379 144.4925 142.2633C672.3779 411.4237 607.7512 475.1329 527.8843 475.1329"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-top-arrow" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M838.116 732.779 877.7 693.195 511.979 327.549 146.3 693.195 185.883 732.779 512.003 406.652Z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-tianjia" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M580.422591 890.968148c0 37.765115-30.617553 68.38039-68.344305 68.38039l0 0c-37.804527 0-68.421056-30.615275-68.421056-68.38039L443.65723 132.008546c0-37.764092 30.616529-68.381413 68.421056-68.381413l0 0c37.726752 0 68.344305 30.616298 68.344305 68.381413L580.422591 890.968148z"  ></path>' +
    '' +
    '<path d="M891.535772 443.107957c37.803503 0 68.419009 30.616298 68.419009 68.381413l0 0c0 37.764092-30.615506 68.38039-68.419009 68.38039L132.545073 579.86976c-37.728799 0-68.347375-30.616298-68.347375-68.38039l0 0c0-37.765115 30.617553-68.381413 68.347375-68.381413L891.535772 443.107957z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-gouxuan" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M512 64.262216c-247.327671 0-447.788948 200.461277-447.788948 447.788948s200.461277 447.788948 447.788948 447.788948c247.327671 0 447.788948-200.461277 447.788948-447.788948S759.327671 64.262216 512 64.262216zM793.096033 385.368642l-316.194664 316.194664c-9.209553 9.209553-25.889078 13.405016-39.703408 12.791046-13.916658 0.61397-30.800839-3.581493-40.010393-12.791046L258.430299 562.703707c-17.293495-17.293495-17.293495-45.433796 0-62.829619 17.293495-17.293495 45.433796-17.293495 62.829619 0L437.095633 615.812132l293.273109-293.273109 0 0c17.293495-17.293495 45.433796-17.293495 62.829619 0C810.491856 339.934846 810.491856 368.075147 793.096033 385.368642z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-weigouxuan" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M512.006 1010.492C237.138 1010.492 13.516 786.868 13.516 512S237.138 13.508 512.006 13.508 1010.484 237.132 1010.484 512 786.876 1010.492 512.006 1010.492zM512.006 69.082C267.774 69.082 69.088 267.768 69.088 512s198.686 442.918 442.918 442.918c244.218 0 442.904-198.686 442.904-442.918S756.226 69.082 512.006 69.082z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-bottom-arrow" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M204.048 399.211l-39.585 39.583 365.721 365.646 365.679-365.646-39.583-39.583-326.12 326.126z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)