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
    public class WastesController : Controller
    {
        private FIT5120_ModelContainer db = new FIT5120_ModelContainer();

        // GET: Wastes
        public ActionResult Index()
        {
            var wasteSet = db.WasteSet.Include(w => w.WasteKind);
            return View(wasteSet.ToList());
        }

        // GET: Wastes/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Waste waste = db.WasteSet.Find(id);
            if (waste == null)
            {
                return HttpNotFound();
            }
            return View(waste);
        }

        // GET: Wastes/Create
        public ActionResult Create()
        {
            ViewBag.WasteKind_wasteKindId = new SelectList(db.WasteKindSet, "wasteKindId", "wasteKindName");
            return View();
        }

        // POST: Wastes/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "wasteId,wasteName,WasteKind_wasteKindId")] Waste waste)
        {
            if (ModelState.IsValid)
            {
                db.WasteSet.Add(waste);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.WasteKind_wasteKindId = new SelectList(db.WasteKindSet, "wasteKindId", "wasteKindName", waste.WasteKind_wasteKindId);
            return View(waste);
        }

        // GET: Wastes/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Waste waste = db.WasteSet.Find(id);
            if (waste == null)
            {
                return HttpNotFound();
            }
            ViewBag.WasteKind_wasteKindId = new SelectList(db.WasteKindSet, "wasteKindId", "wasteKindName", waste.WasteKind_wasteKindId);
            return View(waste);
        }

        // POST: Wastes/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "wasteId,wasteName,WasteKind_wasteKindId")] Waste waste)
        {
            if (ModelState.IsValid)
            {
                db.Entry(waste).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.WasteKind_wasteKindId = new SelectList(db.WasteKindSet, "wasteKindId", "wasteKindName", waste.WasteKind_wasteKindId);
            return View(waste);
        }

        // GET: Wastes/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Waste waste = db.WasteSet.Find(id);
            if (waste == null)
            {
                return HttpNotFound();
            }
            return View(waste);
        }

        // POST: Wastes/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Waste waste = db.WasteSet.Find(id);
            db.WasteSet.Remove(waste);
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
