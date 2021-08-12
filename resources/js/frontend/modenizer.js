/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-cssanimations-setclasses !*/
!(function (e, n, t) {
    function r(e, n) {
        return typeof e === n;
    }
    function o() {
        var e, n, t, o, s, i, a;
        for (var l in S)
            if (S.hasOwnProperty(l)) {
                if (
                    ((e = []),
                    (n = S[l]),
                    n.name &&
                        (e.push(n.name.toLowerCase()),
                        n.options &&
                            n.options.aliases &&
                            n.options.aliases.length))
                )
                    for (t = 0; t < n.options.aliases.length; t++)
                        e.push(n.options.aliases[t].toLowerCase());
                for (
                    o = r(n.fn, "function") ? n.fn() : n.fn, s = 0;
                    s < e.length;
                    s++
                )
                    (i = e[s]),
                        (a = i.split(".")),
                        1 === a.length
                            ? (Modernizr[a[0]] = o)
                            : (!Modernizr[a[0]] ||
                                  Modernizr[a[0]] instanceof Boolean ||
                                  (Modernizr[a[0]] = new Boolean(
                                      Modernizr[a[0]]
                                  )),
                              (Modernizr[a[0]][a[1]] = o)),
                        C.push((o ? "" : "no-") + a.join("-"));
            }
    }
    function s(e) {
        var n = _.className,
            t = Modernizr._config.classPrefix || "";
        if ((x && (n = n.baseVal), Modernizr._config.enableJSClass)) {
            var r = new RegExp("(^|\\s)" + t + "no-js(\\s|$)");
            n = n.replace(r, "$1" + t + "js$2");
        }
        Modernizr._config.enableClasses &&
            ((n += " " + t + e.join(" " + t)),
            x ? (_.className.baseVal = n) : (_.className = n));
    }
    function i(e, n) {
        return function () {
            return e.apply(n, arguments);
        };
    }
    function a(e, n, t) {
        var o;
        for (var s in e)
            if (e[s] in n)
                return t === !1
                    ? e[s]
                    : ((o = n[e[s]]), r(o, "function") ? i(o, t || n) : o);
        return !1;
    }
    function l(e, n) {
        return !!~("" + e).indexOf(n);
    }
    function u() {
        return "function" != typeof n.createElement
            ? n.createElement(arguments[0])
            : x
            ? n.createElementNS.call(
                  n,
                  "http://www.w3.org/2000/svg",
                  arguments[0]
              )
            : n.createElement.apply(n, arguments);
    }
    function f(e) {
        return e
            .replace(/([a-z])-([a-z])/g, function (e, n, t) {
                return n + t.toUpperCase();
            })
            .replace(/^-/, "");
    }
    function c(n, t, r) {
        var o;
        if ("getComputedStyle" in e) {
            o = getComputedStyle.call(e, n, t);
            var s = e.console;
            if (null !== o) r && (o = o.getPropertyValue(r));
            else if (s) {
                var i = s.error ? "error" : "log";
                s[i].call(
                    s,
                    "getComputedStyle returning null, its possible modernizr test results are inaccurate"
                );
            }
        } else o = !t && n.currentStyle && n.currentStyle[r];
        return o;
    }
    function d(e) {
        return e
            .replace(/([A-Z])/g, function (e, n) {
                return "-" + n.toLowerCase();
            })
            .replace(/^ms-/, "-ms-");
    }
    function p() {
        var e = n.body;
        return e || ((e = u(x ? "svg" : "body")), (e.fake = !0)), e;
    }
    function m(e, t, r, o) {
        var s,
            i,
            a,
            l,
            f = "modernizr",
            c = u("div"),
            d = p();
        if (parseInt(r, 10))
            for (; r--; )
                (a = u("div")),
                    (a.id = o ? o[r] : f + (r + 1)),
                    c.appendChild(a);
        return (
            (s = u("style")),
            (s.type = "text/css"),
            (s.id = "s" + f),
            (d.fake ? d : c).appendChild(s),
            d.appendChild(c),
            s.styleSheet
                ? (s.styleSheet.cssText = e)
                : s.appendChild(n.createTextNode(e)),
            (c.id = f),
            d.fake &&
                ((d.style.background = ""),
                (d.style.overflow = "hidden"),
                (l = _.style.overflow),
                (_.style.overflow = "hidden"),
                _.appendChild(d)),
            (i = t(c, e)),
            d.fake
                ? (d.parentNode.removeChild(d),
                  (_.style.overflow = l),
                  _.offsetHeight)
                : c.parentNode.removeChild(c),
            !!i
        );
    }
    function y(n, r) {
        var o = n.length;
        if ("CSS" in e && "supports" in e.CSS) {
            for (; o--; ) if (e.CSS.supports(d(n[o]), r)) return !0;
            return !1;
        }
        if ("CSSSupportsRule" in e) {
            for (var s = []; o--; ) s.push("(" + d(n[o]) + ":" + r + ")");
            return (
                (s = s.join(" or ")),
                m(
                    "@supports (" +
                        s +
                        ") { #modernizr { position: absolute; } }",
                    function (e) {
                        return "absolute" == c(e, null, "position");
                    }
                )
            );
        }
        return t;
    }
    function v(e, n, o, s) {
        function i() {
            c && (delete N.style, delete N.modElem);
        }
        if (((s = r(s, "undefined") ? !1 : s), !r(o, "undefined"))) {
            var a = y(e, o);
            if (!r(a, "undefined")) return a;
        }
        for (
            var c, d, p, m, v, g = ["modernizr", "tspan", "samp"];
            !N.style && g.length;

        )
            (c = !0), (N.modElem = u(g.shift())), (N.style = N.modElem.style);
        for (p = e.length, d = 0; p > d; d++)
            if (
                ((m = e[d]),
                (v = N.style[m]),
                l(m, "-") && (m = f(m)),
                N.style[m] !== t)
            ) {
                if (s || r(o, "undefined")) return i(), "pfx" == n ? m : !0;
                try {
                    N.style[m] = o;
                } catch (h) {}
                if (N.style[m] != v) return i(), "pfx" == n ? m : !0;
            }
        return i(), !1;
    }
    function g(e, n, t, o, s) {
        var i = e.charAt(0).toUpperCase() + e.slice(1),
            l = (e + " " + z.join(i + " ") + i).split(" ");
        return r(n, "string") || r(n, "undefined")
            ? v(l, n, o, s)
            : ((l = (e + " " + P.join(i + " ") + i).split(" ")), a(l, n, t));
    }
    function h(e, n, r) {
        return g(e, t, t, n, r);
    }
    var C = [],
        S = [],
        w = {
            _version: "3.6.0",
            _config: {
                classPrefix: "",
                enableClasses: !0,
                enableJSClass: !0,
                usePrefixes: !0,
            },
            _q: [],
            on: function (e, n) {
                var t = this;
                setTimeout(function () {
                    n(t[e]);
                }, 0);
            },
            addTest: function (e, n, t) {
                S.push({ name: e, fn: n, options: t });
            },
            addAsyncTest: function (e) {
                S.push({ name: null, fn: e });
            },
        },
        Modernizr = function () {};
    (Modernizr.prototype = w), (Modernizr = new Modernizr());
    var _ = n.documentElement,
        x = "svg" === _.nodeName.toLowerCase(),
        b = "Moz O ms Webkit",
        P = w._config.usePrefixes ? b.toLowerCase().split(" ") : [];
    w._domPrefixes = P;
    var z = w._config.usePrefixes ? b.split(" ") : [];
    w._cssomPrefixes = z;
    var E = { elem: u("modernizr") };
    Modernizr._q.push(function () {
        delete E.elem;
    });
    var N = { style: E.elem.style };
    Modernizr._q.unshift(function () {
        delete N.style;
    }),
        (w.testAllProps = g),
        (w.testAllProps = h),
        Modernizr.addTest("cssanimations", h("animationName", "a", !0)),
        o(),
        s(C),
        delete w.addTest,
        delete w.addAsyncTest;
    for (var T = 0; T < Modernizr._q.length; T++) Modernizr._q[T]();
    e.Modernizr = Modernizr;
})(window, document);
