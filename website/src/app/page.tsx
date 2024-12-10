import CaseStudy from "@/components/case_study/page";
import Header from "@/components/header/page";
import PaymentGateway from "@/components/payment_gateway/page";
import Service from "@/components/service/page";
import Slider from "@/components/Sidebar/page";
import serviceData from '@/data/service.json';

export default function Home() {
  return (
    <div className="overflow-hidden">
      <Header />
      <main className="content">
        <Slider />
        <Service data={serviceData} />
        <PaymentGateway />
        <CaseStudy />
      </main>
    </div>
  );
}
