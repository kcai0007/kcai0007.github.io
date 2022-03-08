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
    public class ArticlesController : Controller
    {
        private FIT5120_ModelContainer db = new FIT5120_ModelContainer();

        // GET: Articles
        public ActionResult Index()
        {
            var articleSet = db.ArticleSet.Include(a => a.Waste);
            return View(articleSet.ToList());
        }

        // GET: Articles/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Article article = db.ArticleSet.Find(id);
            if (article == null)
            {
                return HttpNotFound();
            }
            return View(article);
        }

        // GET: Articles/Create
        public ActionResult Create()
        {
            ViewBag.Waste_wasteId = new SelectList(db.WasteSet, "wasteId", "wasteName");
            return View();
        }

        // POST: Articles/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "articleId,articleName,Waste_wasteId")] Article article)
        {
            if (ModelState.IsValid)
            {
                db.ArticleSet.Add(article);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.Waste_wasteId = new SelectList(db.WasteSet, "wasteId", "wasteName", article.Waste_wasteId);
            return View(article);
        }

        // GET: Articles/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Article article = db.ArticleSet.Find(id);
            if (article == null)
            {
                return HttpNotFound();
            }
            ViewBag.Waste_wasteId = new SelectList(db.WasteSet, "wasteId", "wasteName", article.Waste_wasteId);
            return View(article);
        }

        // POST: Articles/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "articleId,articleName,Waste_wasteId")] Article article)
        {
            if (ModelState.IsValid)
            {
                db.Entry(article).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.Waste_wasteId = new SelectList(db.WasteSet, "wasteId", "wasteName", article.Waste_wasteId);
            return View(article);
        }

        // GET: Articles/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Article article = db.ArticleSet.Find(id);
            if (article == null)
            {
                return HttpNotFound();
            }
            return View(article);
        }

        // POST: Articles/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Article article = db.ArticleSet.Find(id);
            db.ArticleSet.Remove(article);
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
