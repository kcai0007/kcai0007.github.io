using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using FIT5120_Waste.Models;

namespace FIT5120_Waste.Controllers
{
    public class WasteKindsController : Controller
    {
        private FIT5120_ModelContainer db = new FIT5120_ModelContainer();

        // GET: WasteKinds
        public ActionResult Index()
        {
            return View(db.WasteKindSet.ToList());
        }

        // GET: WasteKinds/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            WasteKind wasteKind = db.WasteKindSet.Find(id);
            if (wasteKind == null)
            {
                return HttpNotFound();
            }
            return View(wasteKind);
        }

        // GET: WasteKinds/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: WasteKinds/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "wasteKindId,wasteKindName")] WasteKind wasteKind)
        {
            if (ModelState.IsValid)
            {
                db.WasteKindSet.Add(wasteKind);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(wasteKind);
        }

        // GET: WasteKinds/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            WasteKind wasteKind = db.WasteKindSet.Find(id);
            if (wasteKind == null)
            {
                return HttpNotFound();
            }
            return View(wasteKind);
        }

        // POST: WasteKinds/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "wasteKindId,wasteKindName")] WasteKind wasteKind)
        {
            if (ModelState.IsValid)
            {
                db.Entry(wasteKind).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(wasteKind);
        }

        // GET: WasteKinds/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            WasteKind wasteKind = db.WasteKindSet.Find(id);
            if (wasteKind == null)
            {
                return HttpNotFound();
            }
            return View(wasteKind);
        }

        // POST: WasteKinds/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            WasteKind wasteKind = db.WasteKindSet.Find(id);
            db.WasteKindSet.Remove(wasteKind);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
