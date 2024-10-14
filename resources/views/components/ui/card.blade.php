<div
  {{ $attributes->class(['bg-[#10101E] divide-[#1E1E2C] divide-y p-[40px] rounded-[10px] border-[#1E1E2C] border flex flex-1 flex-col justify-between', request()->is('/') ? 'h-full' : '']) }}>
  {{ $slot }}
</div>
