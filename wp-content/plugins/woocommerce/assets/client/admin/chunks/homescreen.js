"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[5502],{50900:(e,s,t)=>{t.r(s),t.d(s,{default:()=>u});var i=t(69307),o=t(94333),n=t(9818),r=t(67221),a=t(10431),l=t(48343);const p=(0,t(88679).O3)("onboarding",{}),u=(0,o.compose)((0,r.withOnboardingHydration)({profileItems:p.profile}),(0,n.withSelect)((e=>{const{getProfileItems:s,hasFinishedResolution:t}=e(r.ONBOARDING_STORE_NAME);return{profileItems:s(),hasFinishedResolution:t("getProfileItems",[])}})))((({profileItems:{completed:e,skipped:s}={},hasFinishedResolution:t})=>{(0,i.useEffect)((()=>{!t||e||s||(0,a.getHistory)().push((0,a.getNewPath)({},"/setup-wizard",{}))}),[t,e,s]);const o=(0,a.useQuery)();return(0,i.createElement)(l.ZP,{query:o})}))}}]);